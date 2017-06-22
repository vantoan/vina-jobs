<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_user_role".
 *
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property integer $sorted
 * @property integer $status
 */
class TnUserRole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_user_role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sorted', 'status'], 'integer'],
            [['name', 'code'], 'string', 'max' => 55],
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
            'code' => 'Code',
            'sorted' => 'Sorted',
            'status' => 'Status',
        ];
    }
}
