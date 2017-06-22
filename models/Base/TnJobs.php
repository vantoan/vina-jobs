<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_jobs".
 *
 * @property integer $id
 * @property integer $company_id
 * @property string $title
 * @property integer $location_id
 * @property integer $job_category_id
 * @property string $description
 * @property string $application_emal_url
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property integer $approved_by
 * @property string $approved_at
 * @property integer $view
 * @property integer $sorted
 * @property integer $star
 * @property integer $status
 */
class TnJobs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_jobs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'location_id', 'job_category_id', 'approved_by', 'view', 'sorted', 'star', 'status'], 'integer'],
            [['description'], 'string'],
            [['created_by', 'created_at', 'updated_by', 'updated_at', 'approved_at'], 'safe'],
            [['title', 'application_emal_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_id' => 'Company ID',
            'title' => 'Title',
            'location_id' => 'Location ID',
            'job_category_id' => 'Job Category ID',
            'description' => 'Description',
            'application_emal_url' => 'Application Emal Url',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'approved_by' => 'Approved By',
            'approved_at' => 'Approved At',
            'view' => 'View',
            'sorted' => 'Sorted',
            'star' => 'Star',
            'status' => 'Status',
        ];
    }
}
