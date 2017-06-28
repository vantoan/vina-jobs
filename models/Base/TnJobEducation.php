<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_job_education".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sorted
 * @property integer $status
 * @property integer $is_deleted
 */
class TnJobEducation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_job_education';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sorted', 'status', 'is_deleted'], 'integer'],
            [['name'], 'string', 'max' => 155],
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
            'is_deleted' => 'Is Deleted',
        ];
    }
}
