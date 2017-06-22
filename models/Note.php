<?php

namespace app\models;

use app\components\tona\Common;
use app\components\tona\Datetime;
use app\models\Base\TnNote;
use app\models\Base\TnUsers;
use Carbon\Carbon;
use Yii;

class Note extends TnNote
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['user_id', 'name', 'due_date'], 'required'],
			[['user_id', 'created_by', 'updated_by', 'sorted', 'status', 'is_deleted'], 'integer'],
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

	/**
	 * @param $formData
	 * @return array|bool
	 */
	public static function savePersonalTask($formData, $id){
		if($id > 0){
			$model = Note::findOne($id);
		}else{
			$model = new Note();
			$model->status = 0;
		}
		$model->name = $formData['name'];
		$model->content = $formData['content'];
		$model->due_date = Carbon::createFromFormat(Datetime::VIEW_DATETIME_dmYHi, $formData['due_date'])->format(Datetime::SQL_DATETIME);
		$model->setToSave();
		if($model->save()){
			return true;
		}else{
			return $model->getFirstErrors();
		}

	}


	public function setToSave(){
		$this->user_id      = Common::currentUser('id');
		$this->created_by = Common::currentUser('id');
		$this->updated_by = Common::currentUser('id');
		$this->created_at = Datetime::getDateNow(Datetime::SQL_DATETIME);
		$this->updated_at = Datetime::getDateNow(Datetime::SQL_DATETIME);
	}
	public function setToUpdate(){
		$this->updated_by = Common::currentUser('id');
		$this->updated_at = Datetime::getDateNow(Datetime::SQL_DATETIME);
	}

	public static function loadTask(){
		$tasks = Note::find()->where(['user_id' => Common::currentUser('id'), 'is_deleted' => 0])->orderBy('status ASC, due_date DESC')->all();
		$data= [];
		if($tasks){
			foreach($tasks as $task){
				$data[] = [
					'id'    => $task->id,
					'name'    => $task->name,
					'content'    => $task->content,
					'due_date'    => Carbon::createFromFormat(Datetime::SQL_DATETIME, $task->due_date)->format(Datetime::INPUT_d_MM_Y_Hi),
					'due_date_d'    => Carbon::createFromFormat(Datetime::SQL_DATETIME, $task->due_date)->format(Datetime::INPUT_d_MM_Y),
					'status'    => $task->status,
				];
			}
		}
		return $data;
	}

	/**
	 * @param $id
	 * @return static
	 */
	public static function loadTaskToEdit($id){
		$result = Note::findOne($id);
		return [
			'id'    => $result->id,
			'name'  => $result->name,
			'content' => $result->content,
			'due_date'  => Carbon::createFromFormat(Datetime::SQL_DATETIME, $result->due_date)->format(Datetime::VIEW_DATETIME_dmYHi),
		];
	}

	public static function taskToDelete($id){
		$model = Note::findOne($id);
		$model->is_deleted = 1;
		$model->save();
		return true;
	}
}
