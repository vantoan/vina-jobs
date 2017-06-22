<?php

namespace app\forms;

use app\components\tona\Common;
use app\components\tona\Cons;
use app\components\tona\Helper;
use app\models\Candidate;
use app\models\CandidateTags;
use Carbon\Carbon;
use Yii;

class ResumeForm extends Candidate
{

    public $isNew = false;
    public $user_id;

    public $name;
    public $resume_title;
    public $email;
    public $resume_location;
    public $resume_content;
    public $resume_net_work;
    public $resume_url;
    public $resume_job_categories;
    public $resume_skill;
    public $resume_skill_content;
    public $resume_video;

    public $experience_employer;
    public $experience_job_title;
    public $experience_start_date;
    public $experience_end_date;
    public $experience_responsibilities;

    public $education_shool_name;
    public $education_qualifications;
    public $education_start_date;
    public $education_end_date;
    public $education_note;

    public $file;
    public $education;
    public $slug;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'resume_title', 'email', 'resume_job_categories', 'resume_location' , 'resume_skill' ,'resume_skill_content'], 'required', 'message' => '"{attribute}" là bắt buộc.'],
            [['user_id', 'resume_job_categories', 'resume_location'], 'integer'],
            [['resume_content','resume_skill'], 'string'],
            [['resume_title', 'resume_video'], 'string', 'max' => 255],
//            [['resume_net_work'], 'string', 'max' => 1000],
            [['file'], 'file'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'resume_title' => 'Tiêu đề',
            'email' => 'Email',

            'resume_video' => 'Video',
            'resume_location' => 'Địa điểm mong muốn',
            'resume_skill' => 'Kĩ năng tags',
            'resume_job_categories' => 'Chọn danh mục',
            'resume_content' => 'Giới thiệu về bản thân',
            'resume_skill_content' => 'Mô tả kỹ năng của bạn',
            'resume_net_work' => 'Mạng xã hội',
            'resume_url' => 'Liên kết',

            'experience_employer' => 'Tên công ty',
            'experience_start_date' => 'Thòi gian (từ - đến)',
            'experience_job_title' => 'Chức vụ',
            'experience_responsibilities' => 'Ghi chú',

            'education_shool_name' => 'Tên trường',
            'education_qualifications' => 'Ngành học',
            'education_start_date' => 'Thời gian (từ - dến)',
//            'education_end_date' => 'Start/end date',
            'education_note' => 'Ghi chú',

            'file' => 'Upload your resume (optional)',
        ];
    }

    public static function saveForm($data, $file_path, $item_id = 0){
        if($item_id == 0){
            $model = new Candidate();
        }else{
            $model = Candidate::findOne($item_id);
        }

        $data = Helper::arrayToObject($data['ResumeForm']);

        $skills = explode('|', $data->resume_skill);

        $resume_net_work = self::makeJsonNetwork($data->resume_net_work, $data->resume_url);
        $experience = self::makeJsonExperience($data->experience_employer, $data->experience_start_date, $data->experience_job_title, $data->experience_responsibilities);
        $education = self::makeJsonEducation($data->education_shool_name, $data->education_start_date, $data->education_qualifications, $data->education_note);

        $model->user_id = $data->user_id;
        $model->title = $data->resume_title;
        $model->slug = Helper::createSlug($data->resume_title);
        $model->job_category_id = $data->resume_job_categories;
        $model->skill_tags = $data->resume_skill;
        $model->skill = $data->resume_skill_content;
        $model->location = $data->resume_location;
        $model->video = $data->resume_video;
        $model->resume_content = $data->resume_content;
        $model->resume_file = $file_path;

        $model->social_network = $resume_net_work;
        $model->experience = $experience;
        $model->education = $education;

        $model->created_by = Common::currentUser('id');
        $model->updated_by = Common::currentUser('id');
        $model->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $model->updated_at = Carbon::now()->format('Y-m-d H:i:s');

        $model->status = Cons::STATUS_DRAFT;
        if($model->save()){
            CandidateTags::saveCandidateTags($model->id, $skills, $item_id);
            return $model;
        }else{
            return false;
        }
    }

    public function bindToForm($model){
        $this->resume_title = $model->title;
        $this->resume_content = $model->resume_content;
        $this->resume_skill_content = $model->skill;
        $this->resume_skill = $model->skill_tags;
        $this->resume_location = $model->location;
        $this->resume_video = $model->video;
        $this->resume_job_categories = $model->job_category_id;
        $this->resume_net_work = $model->social_network;
        $this->experience_employer = $model->experience;
        $this->education_shool_name = $model->education;
    }

    /**
     * @param $education_shool_name
     * @param $education_start_date
     * @param $education_qualifications
     * @param $education_note
     * @return string
     */
    public static function makeJsonEducation($education_shool_name, $education_start_date, $education_qualifications, $education_note)
    {
        if($education_shool_name && $education_start_date && $education_qualifications && $education_note){
            $res = [];
            foreach($education_shool_name as $key => $value){
                if($value && $education_start_date->$key && $education_qualifications->$key && $education_note->$key){
                    $res[] = [
                        'education_shool_name'           => $value,
                        'education_start_date'         => $education_start_date->$key,
                        'education_qualifications'          => $education_qualifications->$key,
                        'education_note'   => $education_note->$key,
                    ];
                }
            }
            return json_encode($res);
        }else{
            return json_encode([]);
        }
    }

    /**
     * @param $experience_employer
     * @param $experience_start_date
     * @param $experience_job_title
     * @param $experience_responsibilities
     * @return string
     */
    public static function makeJsonExperience($experience_employer, $experience_start_date, $experience_job_title, $experience_responsibilities)
    {
        if($experience_employer && $experience_start_date && $experience_job_title && $experience_responsibilities){
            $res = [];
            foreach($experience_employer as $key => $value){
                if($value && $experience_start_date->$key && $experience_job_title->$key && $experience_responsibilities->$key){
                    $res[] = [
                        'experience_employer'           => $value,
                        'experience_start_date'         => $experience_start_date->$key,
                        'experience_job_title'          => $experience_job_title->$key,
                        'experience_responsibilities'   => $experience_responsibilities->$key,
                    ];
                }
            }
            return json_encode($res);
        }else{
            return json_encode([]);
        }
    }

    /**
     * @param $resume_net_work
     * @param $resume_url
     * @return string
     */
    public function makeJsonNetwork($resume_net_work, $resume_url){
        if($resume_net_work && $resume_url){
            $res = [];
            foreach($resume_net_work as $key => $value){
                if($value && $resume_url->$key){
                    $res[] = [
                        'id'    => $value,
                        'value' => $resume_url->$key
                    ];
                }
            }
            return json_encode($res);
        }else{
            return json_encode([]);
        }
    }

}
