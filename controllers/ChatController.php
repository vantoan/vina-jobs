<?php

namespace app\controllers;

use app\components\tona\Common;
use app\components\tona\Cons;
use app\components\tona\Helper;
use app\models\ChatGroupMembers;
use app\models\ChatMessage;
use app\models\Tags;
use app\models\Users;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\User;

class ChatController extends BaseController
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

    public function actionSendMessage(){
        $post = Yii::$app->request->post();
        $chat = ChatMessage::saveMessage($post);
        $error = false;
        return Helper::jsonData(['error' => $error, 'data' => $chat]);
    }
    public function actionGetMembers(){
        $users = ChatGroupMembers::getMembers(Common::currentUser());

        return Helper::jsonData(['error' => false, 'data' => $users]);
    }
    public function actionGetMessage(){
        $data = $this->request()->get();
        $users = ChatMessage::getMessage(Common::currentUser(), $data);
        return Helper::jsonData(['error' => false, 'data' => $users]);
    }
}
