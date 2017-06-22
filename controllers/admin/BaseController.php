<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/8/2016
 * Time: 10:59 PM
 */

namespace app\controllers\admin;

use app\components\LogSystemWidget;
use app\components\tona\Helper;
use app\components\tona\Role;
use app\models\Setting;
use Yii;
use yii\web\Controller;

class BaseController extends Controller
{
    public $getSetting;
	public function init(){
		parent::init();
		$this->layout = 'admin';

		if(Yii::$app->user->isGuest){
			return $this->redirect(['/admin/login/login']);
		}else{
            $this->setSetting();
        }

        if(!Role::allowAdmin()){
            return $this->redirect(Helper::siteURL());
        }
	}

    /**
     * @param array $data
     * @return string
     */
    public function jsonData($data = [])
    {
        return Helper::jsonData($data);
    }

    public function setSetting(){
        $data = Setting::getListSetting();
        if($data){
            $arr = [];
            foreach($data as $value){
                $arr[] = [$value->code => $value->value ? $value->value : $value->default];
            }
            $this->getSetting = $arr;
        }
    }

    /**
     * @param \yii\base\Action $action
     * @param mixed $result
     * @return mixed
     */
    public function afterAction($action, $result)
    {
        $result = parent::afterAction($action, $result);
        LogSystemWidget::createLogs();
        return $result;
    }
}