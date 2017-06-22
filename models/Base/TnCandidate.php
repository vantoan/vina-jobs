<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_candidate".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property integer $job_category_id
 * @property string $skill
 * @property integer $location
 * @property string $video
 * @property string $resume_content
 * @property string $resume_file
 * @property string $social_network
 * @property string $experience
 * @property integer $created_by
 * @property string $created_at
 * @property integer $updated_by
 * @property string $updated_at
 * @property integer $approved_by
 * @property string $approved_at
 * @property integer $view
 * @property integer $sorted
 * @property integer $star
 * @property integer $status
 */
class TnCandidate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_candidate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'job_category_id', 'location', 'created_by', 'updated_by', 'approved_by', 'view', 'sorted', 'star', 'status'], 'integer'],
            [['resume_content', 'skill'], 'string'],
            [['created_at', 'updated_at', 'approved_at'], 'safe'],
//            [['title', 'video', 'resume_file'], 'string', 'max' => 255],
//            [['social_network', 'experience'], 'string', 'max' => 1000],
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
            'title' => 'Title',
            'job_category_id' => 'Job Category ID',
            'skill' => 'Skill',
            'location' => 'Location',
            'video' => 'Video',
            'resume_content' => 'Resume Content',
            'resume_file' => 'Resume File',
            'social_network' => 'Social Network',
            'experience' => 'Experience',
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
