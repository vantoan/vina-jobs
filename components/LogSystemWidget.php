<?php
namespace app\components;
use app\components\tona\Common;
use app\components\tona\Cons;
use app\components\tona\Helper;
use app\models\LogSystem;
use Carbon\Carbon;
use yii\base\Widget;
use Yii;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/12/2016
 * Time: 8:20 PM
 */
class LogSystemWidget extends Widget
{
	public $message;
	public function init()
	{
		parent::init();
	}

	public function run()
	{

	}

	public static function createLogs(){
		$u = new LogSystem();
		$user_id = Common::currentUser('id');
		$u->user_id = $user_id ? $user_id : 0;
		$u->time = Carbon::now()->format(Cons::SQL_DATE_TIME);
		$u->browser = Helper::getBrowser();
		$u->url = Helper::getCurrentUrl();
		$u->ip = Helper::getIpClient();
		$u->controller = Yii::$app->controller->id;
		$u->action = Yii::$app->controller->action->id;
		$u->method = Helper::getMethod();
		$u->save();
	}
}