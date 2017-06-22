<?php

namespace app\models;

use app\models\Base\TnCompany;
use Yii;

class Company extends TnCompany
{
	public static function saveCompany($data, $user_id){
		$model = new Company();
		$model->name = $data->com_name;
		$model->address = $data->com_address;
		$model->phone = $data->com_phone;
		$model->website = $data->com_website;
		$model->user_id = $user_id;
		if(!$model->save()){
			echo '<pre>';
			print_r($model->errors);
			echo '</pre>';
			die;
		}
	}
}
