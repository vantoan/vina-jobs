<?php

namespace app\models;

use app\components\tona\Cons;
use app\components\tona\Datetime;
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
        APP_TYPE_TWITTER = 5;


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

    public static function updateToUserDetail(){
        self::sendEmailToActiveAcount('nguyennguyen.vt88@gmail.com');
    }
    public static function sendEmailToActiveAcount($email){
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
        $mail->Subject = "Test 2";
        $mail->Body = self::getEmailTemplate(Url::to('/profile/active-acount.html?token=asa123432423jk4h23k4j23k423j42h3423', true));
        $mail->AddAddress($email);
        $mail->Send();

        /*if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message has been sent";
        }*/
    }

    public static function getEmailTemplate($url){
        $html = "<div style='margin-left:150px;background-image:url(http://www.emailbackgrounds.com/files/winter/27/top.jpg); padding:50px;width:600px;'>
                <h1 style='color:#FFFFFF;font-family: Arial, Helvetica, sans-serif;text-align:center;line-height:2.5em;'>Congratulations on your successful registration</h1>
                <hr>
                <table>
                <tr><td style='text-align:center'>
                <div>
                <a href=''><img src='http://webneel.com/daily/sites/default/files/images/daily/09-2013/14-diwali-greeting-card.jpg' align='left' style='width:250px;height:250px;' alt=''/></a>
                <p style='color:#FFFFDD; font-family: Allura,cursive,Arial, Helvetica, sans-serif; font-size:20px'>Please click '.$url.' to activate your account to continue using.</p>
                </div>
                </td>
                </tr>
                <tr>
                <td><div style='float:left;'><p style='color:#FFFFFF;font-family: Arial, Helvetica, sans-serif; font-size:20px'>'May the joy, cheer, Mirth and merriment Of this divine festival Surround you forever......'</p></div></td>
                </tr>
                </table>
                </div>";

        return $html;
    }

}
