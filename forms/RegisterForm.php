<?php

namespace app\forms;

use app\components\tona\Common;
use app\components\tona\Helper;
use app\components\tona\Message;
use app\components\tona\Role;
use app\models\Base\UserDetails;
use app\models\Users;
use app\models\UsersDetail;
use Yii;
use yii\base\Model;

class RegisterForm extends Model
{
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $repeat_password;

    public $birthday;
    public $phone;

    public $gender;
    public $slug_name;
    public $type; // 1: Nhà tuy?n d?ng, 2: ng??i tìm vi?c

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['first_name', 'last_name','email', 'password', 'repeat_password'], 'required'],
            [['email'], 'email', 'message' => 'This email khong dung.'],
            /*[['email'], 'unique'],
            ['email', 'unique', 'targetClass' => 'app\models\Base\TnUser', 'targetAttribute' => 'username', 'message' => 'This email has already been taken.'],*/
            [['email'], 'unique'],
            ['email', 'emailValidate'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            ['repeat_password', 'compare', 'compareAttribute'=>'password'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [

        ];
    }

    public function emailValidate(){
        $user = Users::findByUsername($this->username);
        if ($user) {
            $this->addError('email', 'Incorrect email.');
        }
    }

    public function validatePassword(){
        return true;
    }
    public function validateEmailUnique($email){
        $email = Users::find()->where(['username' => $email])->all();
        if($email){
            return false;
        }
        return true;
    }

    public static function saveForm($data){
        $form = new RegisterForm();
        if(!self::validateEmailUnique($data->email)){
            return ['error' => true, 'message' => Message::FORM_ERROR_UNIQUE_EMAIL];
        }else{
            $randPass = rand(111111,999999);
            $post = Yii::$app->request->post();
            $data = Helper::arrayToObject($post['RegisterForm']);

            $model = new Users();
            $model->username = $data->email;
            $model->password = $data->password;
            $model->auth_key = md5($randPass);
            $model->role = Role::ROLE_CUSTOMMER;
            $model->name = $data->first_name. ' ' .$data->last_name;
            $model->slug_name = Helper::createSlug($data->first_name. ' ' .$data->last_name);
            if($model->save()){
                /* Save user detail */
                UsersDetail::saveDetail($data, $model->id);
//                self::sendEmail();
                return ['error' => false, 'message' => Message::FORM_REGISTER_SUCCESS];
            }else{
                return ['error' => true, 'message' => Message::FORM_REGISTER_ERROR];
            }
        }
    }

    public function sendEmail(){
        $mail = new \PHPMailer();

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'vanvan.vt88@gmail.com';                 // SMTP username
        $mail->Password = '311982057';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->setFrom('system@vina-jobs.com', 'Mailer');
        $mail->addAddress('vanvan.vt88@gmail.com', 'Tona');     // Add a recipient
        $mail->addAddress('vanvan.vt88@gmail.com');               // Name is optional
        $mail->addReplyTo('info@vina-jobs.com', 'Information');
//        $mail->addCC('cc@example.com');
//        $mail->addBCC('bcc@example.com');

//        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }

}
