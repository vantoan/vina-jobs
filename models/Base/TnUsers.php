<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $access_token
 * @property string $password_reset_token
 * @property integer $role
 * @property string $name
 * @property string $slug_name
 * @property string $avatar
 * @property integer $archive
 * @property integer $status
 */
class TnUsers extends \yii\db\ActiveRecord
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
            [['role', 'archive', 'status'], 'integer'],
            [['username', 'name'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 64],
            [['auth_key', 'access_token', 'password_reset_token'], 'string', 'max' => 128],
            [['slug_name', 'avatar'], 'string', 'max' => 155],
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
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'password_reset_token' => 'Password Reset Token',
            'role' => 'Role',
            'name' => 'Name',
            'slug_name' => 'Slug Name',
            'avatar' => 'Avatar',
            'archive' => 'Archive',
            'status' => 'Status',
        ];
    }
}
