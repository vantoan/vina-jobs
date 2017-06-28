<?php

namespace app\models;

use app\models\Base\TnJobWorkExperience;
use Yii;

class JobWorkExperience extends TnJobWorkExperience
{
	public static function getList(){
		return self::find()->where("is_deleted != 1 AND status = 1")->asArray()->all();
	}
}
