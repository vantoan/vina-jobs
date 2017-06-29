<?php

namespace app\models;

use app\components\tona\Cons;
use app\components\tona\Datetime;
use app\components\tona\Helper;
use yii\base\Security;
use yii\helpers\Url;
use yii\web\IdentityInterface;

class Users extends \app\models\Base\TnUser implements IdentityInterface
{

    const
        USER_TYPE_EMPLOYER = 1,
        USER_TYPE_JOBSEEKERS = 1,
        USER_TYPE_SYSTEMS = 2,

        APP_TYPE_WEB = 1,
        APP_TYPE_FB = 3,
        APP_TYPE_GOOGLE = 4,
        APP_TYPE_TWITTER = 5,

        USER_STATUS_REGISTER = 0,
        USER_STATUS_ACTIVE = 1,
        USER_STATUS_DISABLED = 2;


    public $slug_name;
    public $new_password;
    public $renew_password;

    public function beforeSave($insert) {
        $this->setPassword($this->password);
        $this->generateAuthKey();
        $this->generatePasswordResetToken();
        return true;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'archive' => Cons::ARCHIVE_FALSE, 'status' => Cons::STATUS_ACTIVE]);
    }

    /**
    037
     * Finds user by password reset token
    038
     *
    039
     * @param  string      $token password reset token
    040
     * @return static|null
    041
     */
    public static function findByPasswordResetToken($token)
    {
        $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int)end($parts);
        if ($timestamp + $expire < time()) {
            return null;
        }

        return static::findOne(['password_reset_token' => $token]);

    }


    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return \Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $security = new Security();
//        $this->password_hash = $security->generatePasswordHash($password);
        $this->password = \Yii::$app->getSecurity()->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $security = new Security();
        $this->auth_key = $security->generateRandomKey();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $security = new Security();
        $this->password_reset_token = $security->generateRandomKey() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
    /** EXTENSION MOVIE **/

    public static function workingWithFB($client){
        $user = Users::findOne(['username' => $client['email']]);
        if(!$user){
            $user = new Users();
        }

        $pass_default = rand(11111, 99999);
        $user->name = $client['name'];
        $user->username = $client['email'];
        $user->setPassword($pass_default);
        $user->user_type = self::USER_TYPE_JOBSEEKERS;
        $user->app_id = "{$client['id']}";
        $user->app_type = self::APP_TYPE_FB;
        $user->auth_key = "$pass_default";
        $user->slug_name = "$pass_default";
        if($user->save()){
            UsersDetail::insertUserDetail($client, $user->id);
            $user->last_login = Datetime::getTimeNow($user->timezone, Datetime::SQL_DATETIME);
            $user->update();
            return \Yii::$app->user->login($user,  3600*24*30);
        }
    }

    public static function workingWithTW($client){
        $user = Users::findOne(['app_id' => $client['id'], 'app_type' => Users::APP_TYPE_TWITTER]);
        if(!$user){
            $user = new Users();
        }

        $pass_default = rand(11111, 99999);
        $user->name = $client['name'];
        $user->username = $client['screen_name'];
        $user->setPassword($pass_default);
        $user->user_type = self::USER_TYPE_JOBSEEKERS;
        $user->app_id = "{$client['id']}";
        $user->app_type = self::APP_TYPE_TWITTER;
        $user->auth_key = "$pass_default";
        $user->timezone = $client['time_zone'];
        $user->lang = $client['lang'];
        $user->slug_name = "$pass_default";
        if($user->save()){
            UsersDetail::insertUserDetailTW($client, $user->id);
            $user->last_login = Datetime::getTimeNow(null, Datetime::SQL_DATETIME);
            $user->update();
            return \Yii::$app->user->login($user,  3600*24*30);
        }else{
            echo '<pre>';
            print_r($user->getErrors());
            echo '</pre>';
            die;
        }
    }

    public static function updateToUserDetail($user_id, $dataForm = []){
        $token = \Yii::$app->security->generateRandomString();
        $user = Users::findOne($user_id);
        $user->status = self::USER_STATUS_REGISTER;
        $user->access_token = \Yii::$app->security->generateRandomString();
        $user->actived_token = $token;
        $user->update();

//        $data = $dataForm['RegisterForm'];
//        self::sendEmailToActiveAcount($data['username'], $token);
    }

    public static function sendEmailToActiveAcount($to_email, $token = ''){
        $mail = new \PHPMailer();
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "vanvan.vt88@gmail.com";
        $mail->Password = "thhwgxqdypmhkgov";
        $mail->SetFrom("vanvan.vt88@gmail.com");
        $mail->Subject = "Congratulations on your successful registration";
        $mail->Body = self::getEmailTemplate(Url::to("/profile/active-acount.html?token=$token", true));
        $mail->AddAddress($to_email);
        $mail->Send();

        /*if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message has been sent";
        }*/
    }

    public static function getEmailTemplate($url){
        $html = file_get_contents(\Yii::$app->basePath.'/mail/layouts/email-register.html');
        $html = str_replace('{name}', 'Tona Nguyen', $html);
        $html = str_replace('{url}', $url, $html);
        $html = str_replace('{site_url}', Helper::siteURL(), $html);
        return $html;
    }

    public static function doActiveAccount($token){

    }

}
