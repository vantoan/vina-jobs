<?php

namespace app\models;

use app\models\Base\TnJobEducation;
use Yii;

class JobEducation extends TnJobEducation
{
	public static function getList(){
		return self::find()->where("is_deleted != 1 AND status = 1")->asArray()->all();
	}
}
