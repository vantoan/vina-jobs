<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_company".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property string $tagline
 * @property string $description
 * @property string $video
 * @property string $website
 * @property string $google_plus
 * @property string $facebook
 * @property string $linkedin
 * @property string $twitter
 * @property string $logo
 * @property integer $created_by
 * @property string $created_at
 * @property integer $updated_by
 * @property string $updated_at
 * @property integer $view
 * @property integer $sorted
 * @property integer $star
 * @property integer $status
 */
class TnCompany extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'created_by', 'updated_by', 'view', 'sorted', 'star', 'status'], 'integer'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'address', 'tagline', 'video', 'website', 'google_plus', 'facebook', 'linkedin', 'twitter', 'logo'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 55],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'address' => 'Address',
            'phone' => 'Phone',
            'tagline' => 'Tagline',
            'description' => 'Description',
            'video' => 'Video',
            'website' => 'Website',
            'google_plus' => 'Google Plus',
            'facebook' => 'Facebook',
            'linkedin' => 'Linkedin',
            'twitter' => 'Twitter',
            'logo' => 'Logo',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'view' => 'View',
            'sorted' => 'Sorted',
            'star' => 'Star',
            'status' => 'Status',
        ];
    }
}
