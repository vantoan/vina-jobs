<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $name
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
 * @property string $timezone
 * @property integer $status
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
            [['user_type', 'app_type', 'role', 'archive', 'status', 'is_deleted'], 'integer'],
            [['username', 'name'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 64],
            [['app_id', 'timezone'], 'string', 'max' => 100],
            [['auth_key', 'access_token', 'password_reset_token'], 'string', 'max' => 128],
            [['slug_name', 'avatar'], 'string', 'max' => 155],
            [['lang'], 'string', 'max' => 5],
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
            'name' => 'Name',
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
            'timezone' => 'Timezone',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
