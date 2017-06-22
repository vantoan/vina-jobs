<?php
namespace app\components;
use app\models\Setting;
use yii\base\Widget;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/12/2016
 * Time: 8:20 PM
 */
class SiteWidget extends Widget
{
	public function init()
	{
		parent::init();
	}

	public function run()
	{

	}

	/**
	 * @param $key
	 * @return mixed
	 */
	public static function site($key){
		$setting = Setting::getListSetting();
		$arr = [];
		foreach($setting as $value){
			$arr[$value->code] = $value->value ? $value->value : $value->default;
		}

		return $arr[$key];
	}
}