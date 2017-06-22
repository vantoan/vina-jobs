<?php

namespace app\models;

use app\models\Base\TnUserRole;
use Yii;

class UserRole extends TnUserRole
{
	public function rules(){
		return [
			[['name', 'code'], 'required'],
			[['sorted', 'status'], 'integer'],
			[['name', 'code'], 'string', 'max' => 55],
		];
	}
}
