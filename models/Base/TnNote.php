<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_note".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $due_date
 * @property string $content
 * @property integer $created_by
 * @property string $created_at
 * @property integer $updated_by
 * @property string $updated_at
 * @property integer $sorted
 * @property integer $status
 * @property integer $is_deleted
 *
 * @property TnUser $user
 */
class TnNote extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_note';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name'], 'required'],
            [['user_id', 'created_by', 'updated_by', 'sorted', 'status'], 'integer'],
            [['due_date', 'created_at', 'updated_at'], 'safe'],
            [['content'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => TnUsers::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'due_date' => 'Due Date',
            'content' => 'Content',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'sorted' => 'Sorted',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(TnUsers::className(), ['id' => 'user_id']);
    }
}
