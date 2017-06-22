<?php

namespace app\controllers\admin;

use app\components\tona\Cons;
use app\components\tona\Helper;
use app\components\UserOnlineWidget;
use app\models\Note;
use app\models\Tags;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class AjaxController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex($cookie_name)
    {
        if(Yii::$app->request->isAjax){
            if(isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name] == true) {
                setcookie($cookie_name, false, time() + (86400 * 30), "/"); // 86400 = 1 day
            } else {
                setcookie($cookie_name, true, time() + (86400 * 30), "/"); // 86400 = 1 day
            }
        }
    }
    public function actionCreateSlug(){
        if(Yii::$app->request->isAjax){
            $name = trim(Yii::$app->request->post('name'));
            return $this->jsonData(['slug' => Helper::createSlug($name)]);
        }
    }

    public function actionPhpWorking(){
        UserOnlineWidget::clearUserOnline();
    }

    public function actionLoadTask(){
        return $this->jsonData(['error' => false, 'data' => Note::loadTask()]);
    }
    public function actionLoadTaskToEdit(){
        $id = Yii::$app->request->get('id');
        return $this->jsonData(['error' => false, 'data' => Note::loadTaskToEdit($id)]);
    }
    public function actionTaskToDelete(){
        $id = Yii::$app->request->get('id');
        return $this->jsonData(['error' => false, 'data' => Note::taskToDelete($id)]);
    }
    public function actionCreateTask(){
        if(Yii::$app->request->isAjax){
            $id  = intval(Yii::$app->request->post('id'));
            $model = Note::savePersonalTask(Yii::$app->request->post()['TaskPersonalForm'], $id);
            if($model === true){
                return $this->jsonData(['error' => false]);
            }
        }
    }
}
