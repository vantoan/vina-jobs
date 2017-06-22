<?php

namespace app\models;

use app\models\Base\TnSetting;
use Yii;

class Setting extends TnSetting
{

	public static $listSetting = null;

	/**
	 * @return array|null|\yii\db\ActiveRecord[]
	 */
	public static function getListSetting(){
		if(self::$listSetting == null){
			self::$listSetting = self::find()->orderBy('sorted ASC')->all();
		}
		return self::$listSetting;
	}

	/**
	 * @param $data
	 * @return bool
	 */
	public static function saveSetting($data){
		if($data){
			foreach($data['value'] as $key => $value){
				$st = self::find()->where(['code' => $key])->one();
				$st->value = $value;
				$st->save();
			}
			return true;
		}
		return false;
	}
}
