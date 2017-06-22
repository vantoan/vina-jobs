<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_chat_group_members".
 *
 * @property integer $id
 * @property integer $group_id
 * @property integer $member_id
 * @property integer $joinned_by
 * @property string $joinned_at
 * @property integer $is_deleted
 */
class TnChatGroupMembers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_chat_group_members';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id', 'member_id'], 'required'],
            [['group_id', 'member_id', 'joinned_by', 'is_deleted'], 'integer'],
            [['joinned_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Group ID',
            'member_id' => 'Member ID',
            'joinned_by' => 'Joinned By',
            'joinned_at' => 'Joinned At',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
