<?php
namespace app\components;
use app\forms\TaskPersonalForm;
use yii\base\Widget;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/12/2016
 * Time: 8:20 PM
 */
class ChatWidget extends Widget
{
	public function init()
	{
		parent::init();
	}

	public function run()
	{
		return TaskWidget::render('chat/index', [

		]);
	}
}