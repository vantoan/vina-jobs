<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_spend_management".
 *
 * @property integer $id
 * @property integer $type
 * @property integer $type_of_expenditure
 * @property string $name
 * @property string $description
 * @property double $money
 * @property string $time
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 * @property integer $status
 * @property integer $is_deleted
 */
class TnSpendManagement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_spend_management';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'type_of_expenditure', 'created_by', 'updated_by', 'status', 'is_deleted'], 'integer'],
            [['description'], 'string'],
            [['money'], 'number'],
            [['time', 'created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'type_of_expenditure' => 'Type Of Expenditure',
            'name' => 'Name',
            'description' => 'Description',
            'money' => 'Money',
            'time' => 'Time',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
