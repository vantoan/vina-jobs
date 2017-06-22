<?php

namespace app\controllers\admin;

use app\components\tona\Datetime;
use app\components\tona\Helper;
use Carbon\Carbon;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class AdminController extends BaseController
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

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionBackupDb(){
        if(Yii::$app->request->isPost){
            $backup = Yii::$app->request->post('backup_db');
            if(isset($backup)){
                Helper::backupDB();
            }
        }
        if(Yii::$app->request->get('delete')){
            @unlink(Yii::$app->basePath.'/db/backups/'.Yii::$app->request->get('delete'));
            return $this->redirect(['/admin/admin/backup-db']);
        }
        $file = [];
        if ($handle = opendir(Yii::$app->basePath.'/db/backups')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    $time = explode('-', $entry);
                    $time = str_replace('.sql', '', $time[3]);
                    $file[] = [
                        'name' => $entry,
                        'time' => Carbon::createFromFormat(Datetime::FILE_TIME, $time)->format(Datetime::VIEW_DATETIME_dmYHis),
                        'path'  => Helper::siteURL().'/db/backups/'.$entry
                    ];
                }
            }
            closedir($handle);
        }

        rsort($file);
        return $this->render('database', [
            'files' => $file
        ]);
    }
}
