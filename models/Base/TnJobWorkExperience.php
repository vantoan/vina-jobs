<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_job_work_experience".
 *
 * @property integer $id
 * @property string $name
 * @property integer $value_default
 * @property integer $sorted
 * @property integer $status
 * @property integer $is_deleted
 */
class TnJobWorkExperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_job_work_experience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value_default', 'sorted', 'status', 'is_deleted'], 'integer'],
            [['name'], 'string', 'max' => 55],
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
            'value_default' => 'Value Default',
            'sorted' => 'Sorted',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
