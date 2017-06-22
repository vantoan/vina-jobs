<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_chat_group".
 *
 * @property integer $id
 * @property string $group_name
 * @property integer $total_members
 * @property string $created_at
 * @property integer $created_by
 * @property integer $is_deleted
 */
class TnChatGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_chat_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['total_members', 'created_by', 'is_deleted'], 'integer'],
            [['created_at'], 'safe'],
            [['group_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_name' => 'Group Name',
            'total_members' => 'Total Members',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
