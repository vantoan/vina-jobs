<?php
namespace app\components;
use app\models\Setting;
use yii\base\Widget;
use yii\bootstrap\Carousel;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/12/2016
 * Time: 8:20 PM
 */
class CarouselWidget extends Widget
{
	public function init()
	{
		parent::init();
	}

	public function run()
	{
		$setting = \app\models\Carousel::getBySlug('dashboard');
		return $this->render('carousel/index', ['data' => $setting]);
	}
}