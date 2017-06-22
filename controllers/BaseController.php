<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/8/2016
 * Time: 10:59 PM
 */

namespace app\controllers;

use app\components\LogSystemWidget;
use app\models\Setting;
use Yii;
use yii\web\Controller;

class BaseController extends Controller
{
    public $getSetting;
	public function init(){
		parent::init();
		$this->layout = 'vina-jobs';

		/*if(Yii::$app->user->isGuest){
			return $this->redirect(['/admin/login/login']);
		}else{
            $this->setSetting();
        }*/
	}

    /**
     * @param array $data
     * @return string
     */
    public function jsonData($data = [])
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if(!$data){
            return ['data' => null];
        }else{
            return $data;
        }
    }

    public function setSetting(){
        $data = Setting::find()->all();
        if($data){
            $arr = [];
            foreach($data as $value){
                $arr[] = [$value->code => $value->value ? $value->value : $value->valuedefault];
            }
            $this->getSetting = $arr;
        }
    }

    public function afterAction($action, $result)
    {
        $result = parent::afterAction($action, $result);
        LogSystemWidget::createLogs();
        return $result;
    }

    public function request(){
        return Yii::$app->request;
    }
}