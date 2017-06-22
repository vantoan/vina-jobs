<?php

namespace app\controllers;

use app\components\tona\Cons;
use app\components\tona\Helper;
use app\models\Tags;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

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

    public function actionLoadTags(){
        $tags = Tags::find()->where(['status' => Cons::STATUS_ACTIVE])->all();
        $data = [];
        foreach($tags as $value){
            $data[] = ['tag' => $value->slug];
        }
        return Helper::jsonData($data);
    }

}
