<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_job_categories".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sorted
 * @property integer $status
 */
class TnJobCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_job_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
