<?php
namespace app\components;
use yii\base\Widget;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/12/2016
 * Time: 8:20 PM
 */
class FooterWidget extends Widget
{
	public  $setView;
	public function init()
	{
		parent::init();
	}

	public function run()
	{
		return $this->render('footer/footer', [
			'data' => ''
		]);
	}
}