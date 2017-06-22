<?php

namespace app\models;

use app\models\Base\TnEvents;
use Yii;

class Events extends TnEvents
{
	public static function saveForm($data){
		if($data['id'] == 0){
			$model = new self();
		}else{
			$model = self::find()->where(['id' => $data['id']])->one();
		}
		$s = explode(' ', $data['from']);
		$e = $data['to'];

		echo '<pre>';
		print_r($s);
		echo '</pre>';
		die;

		$model->title = $data['title'];
		$model->description = $data['description'];
		$model->start = $data['title'];
		$model->end = $data['title'];
		$model->save();
	}
}
