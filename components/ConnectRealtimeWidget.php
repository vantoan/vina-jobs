<?php
namespace app\components;
use app\components\tona\Cons;
use app\components\tona\Helper;
use app\forms\RegisterCompanyForm;
use app\forms\RegisterForm;
use app\models\System;
use app\models\UserOnline;
use Carbon\Carbon;
use yii\base\Widget;
use Yii;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/12/2016
 * Time: 8:20 PM
 */
class ConnectRealtimeWidget extends Widget
{
	public $message;
	public function init()
	{
		parent::init();
	}

	public function run()
	{
		return $this->render('connect-realtime/index');
	}
}