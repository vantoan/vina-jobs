<?php
namespace app\components;
use app\forms\RegisterCompanyForm;
use app\forms\RegisterForm;
use yii\base\Widget;
use Yii;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/12/2016
 * Time: 8:20 PM
 */
class SignUpWidget extends Widget
{
	public $message;
	public function init()
	{
		parent::init();
	}

	public function run()
	{
		$model = new RegisterForm();
		return $this->render('sign-up/form-signup', ['model' => $model]);
	}
}