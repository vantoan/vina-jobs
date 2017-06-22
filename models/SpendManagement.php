<?php

namespace app\models;

use app\components\tona\Common;
use app\components\tona\Datetime;
use app\models\Base\TnSpendManagement;
use Yii;

class SpendManagement extends TnSpendManagement
{

	const
		TYPE_EXPORT = 1,
		TYPE_IMPORT = 2;

	public static $listType = [
		self::TYPE_EXPORT => 'Chi',
		self::TYPE_IMPORT => 'Thu'
	];

	public $from_time;
	public $to_time;
	public $money_view;

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['type', 'type_of_expenditure', 'name', 'money'], 'required', 'message' => "{attribute} can't be blank."],
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
			'type_of_expenditure' => '+/-',
			'name' => 'Name',
			'description' => 'Description',
			'money' => 'Amount',
			'time' => 'Time',
			'created_by' => 'Created By',
			'updated_by' => 'Updated By',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'status' => 'Status',
			'is_deleted' => 'Is Deleted',
		];
	}

	public function setToSave(){
		$this->created_by = Common::currentUser('id');
		$this->updated_by = Common::currentUser('id');
		$this->created_at = Datetime::getDateNow(Datetime::SQL_DATETIME);
		$this->updated_at = Datetime::getDateNow(Datetime::SQL_DATETIME);
	}
	public function setToUpdate(){
		$this->updated_by = Common::currentUser('id');
		$this->updated_at = Datetime::getDateNow(Datetime::SQL_DATETIME);
	}
}
