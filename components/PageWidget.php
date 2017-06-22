<?php
namespace app\components;
use app\components\tona\Cons;
use app\models\Page;
use yii\base\Widget;
use yii\helpers\Console;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/12/2016
 * Time: 8:20 PM
 */
class PageWidget extends Widget
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
	public static function page($slug){
		return Page::getPage($slug);
	}

	public function getPageTemplate($template = Cons::PAGE_TEMPLATE_FULL){

	}
}