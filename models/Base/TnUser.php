<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $full_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property integer $user_type
 * @property integer $app_type
 * @property string $app_id
 * @property string $auth_key
 * @property string $access_token
 * @property string $password_reset_token
 * @property integer $role
 * @property string $slug_name
 * @property string $avatar
 * @property integer $archive
 * @property string $lang
 * @property string $date_of_birth
 * @property integer $gender
 * @property string $address
 * @property string $mobile_number
 * @property integer $work_experience_id
 * @property integer $education_id
 * @property integer $country_id
 * @property string $about_me
 * @property string $timezone
 * @property integer $status
 * @property string $created_date
 * @property string $actived_date
 * @property string $last_login
 * @property integer $is_deleted
 */
class TnUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'auth_key'], 'required'],
            [['user_type', 'app_type', 'role', 'archive', 'gender', 'work_experience_id', 'education_id', 'country_id', 'status', 'is_deleted'], 'integer'],
            [['date_of_birth', 'created_date', 'actived_date', 'last_login'], 'safe'],
            [['about_me'], 'string'],
            [['username'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 64],
            [['full_name', 'slug_name', 'avatar', 'address'], 'string', 'max' => 155],
            [['first_name', 'middle_name', 'last_name'], 'string', 'max' => 55],
            [['app_id', 'timezone'], 'string', 'max' => 100],
            [['auth_key', 'access_token', 'password_reset_token'], 'string', 'max' => 128],
            [['lang'], 'string', 'max' => 5],
            [['mobile_number'], 'string', 'max' => 15],
            [['access_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'full_name' => 'Full Name',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'user_type' => 'User Type',
            'app_type' => 'App Type',
            'app_id' => 'App ID',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'password_reset_token' => 'Password Reset Token',
            'role' => 'Role',
            'slug_name' => 'Slug Name',
            'avatar' => 'Avatar',
            'archive' => 'Archive',
            'lang' => 'Lang',
            'date_of_birth' => 'Date Of Birth',
            'gender' => 'Gender',
            'address' => 'Address',
            'mobile_number' => 'Mobile Number',
            'work_experience_id' => 'Work Experience ID',
            'education_id' => 'Education ID',
            'country_id' => 'Country ID',
            'about_me' => 'About Me',
            'timezone' => 'Timezone',
            'status' => 'Status',
            'created_date' => 'Created Date',
            'actived_date' => 'Actived Date',
            'last_login' => 'Last Login',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
