<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_spend_management_type".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sorted
 * @property integer $status
 */
class TnSpendManagementType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_spend_management_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['sorted', 'status'], 'integer'],
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
            'name' => 'Name',
            'sorted' => 'Sorted',
            'status' => 'Status',
        ];
    }
}
