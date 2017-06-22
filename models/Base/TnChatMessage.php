<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_chat_message".
 *
 * @property integer $id
 * @property integer $group_id
 * @property integer $is_readed
 * @property string $content
 * @property string $time_sended
 * @property string $time_readed
 * @property integer $receiver_id
 * @property integer $sender_id
 * @property integer $is_deleted
 */
class TnChatMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_chat_message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id'], 'required'],
            [['group_id', 'is_readed', 'receiver_id', 'sender_id', 'is_deleted'], 'integer'],
            [['content'], 'string'],
            [['time_sended', 'time_readed'], 'safe'],
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
            'is_readed' => 'Is Readed',
            'content' => 'Content',
            'time_sended' => 'Time Sended',
            'time_readed' => 'Time Readed',
            'receiver_id' => 'Receiver ID',
            'sender_id' => 'Sender ID',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
