<?php
namespace app\components;
use app\models\LoginForm;
use yii\base\Widget;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/12/2016
 * Time: 8:20 PM
 */
class LoginWidget extends Widget
{
	public $message;
	public function init()
	{
		parent::init();
	}

	public function run()
	{
		$model = new LoginForm();
		return $this->render('login/form', ['model' => $model]);
	}
}