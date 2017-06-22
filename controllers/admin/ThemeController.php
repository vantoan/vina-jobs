<?php

namespace app\controllers\admin;

use app\components\tona\Cons;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class ThemeController extends BaseController
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpdate()
    {
        $file = Yii::$app->basePath.'/views/layouts/'.Cons::TEMPLATE_FOLDER.'_partial/footer.php';
        @chmod($file, 0777);

        if(Yii::$app->request->isPost){
           $file_content = Yii::$app->request->post('file_content');
            file_put_contents($file, $file_content);
        }
        $myfile = fopen($file, "r") or die("Unable to open file!");

        $data = '';
        while(!feof($myfile)) {
            $data .= fgets($myfile);
        }
        fclose($myfile);
        return $this->render('update', [
            'file_content' => $data
        ]);
    }

    public function actionStyle()
    {
        $file = Yii::$app->basePath.'/web/template/'.Cons::TEMPLATE_FOLDER.'/css/style.css';
        @chmod($file, 0777);

        if(Yii::$app->request->isPost){
            $file_content = Yii::$app->request->post('file_content');
            file_put_contents($file, $file_content);
        }
        $myfile = fopen($file, "r") or die("Unable to open file!");

        $data = '';
        while(!feof($myfile)) {
            $data .= fgets($myfile);
        }
        fclose($myfile);
        return $this->render('style', [
            'file_content' => $data
        ]);
    }
}
