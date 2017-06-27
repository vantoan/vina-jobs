<?php

namespace app\models;

use app\models\Base\TnLocations;

class Locations extends TnLocations
{
	public static function getList(){
		return self::find()->where("parent_id != 0 AND status = 1")->asArray()->all();
	}
}
