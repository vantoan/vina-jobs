<?php

namespace app\models;

use app\models\Base\TnSpendManagementType;
use Yii;

class SpendManagementType extends TnSpendManagementType
{

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['name'], 'required', 'message' => '{attribute} không thể rỗng'],
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
			'name' => 'Tên',
			'sorted' => 'Xắp sếp',
			'status' => 'Trạng thái',
		];
	}

	public static function getCategoryName($id){
		return self::findOne($id)->name;
	}
}
