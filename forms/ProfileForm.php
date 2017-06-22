<?php

namespace app\forms;

use app\components\tona\Helper;
use app\components\tona\Message;
use app\components\tona\Role;
use app\models\Users;
use app\models\UsersDetail;
use Yii;
use yii\base\Model;

class ProfileForm extends Model
{
    public $first_name;
    public $last_name;
    public $email;

    public $birthday;
    public $phone;
    public $address;
    public $city;
    public $timezone;

    public $gender;
    public $slug_name;
    public $description;


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

    public function bindToForm($data){

    }
}
