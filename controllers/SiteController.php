<?php

namespace app\controllers;

use app\components\tona\Common;
use app\components\tona\Datetime;
use app\forms\RegisterForm;
use app\models\Article;
use app\models\Locations;
use app\models\News;
use app\models\Users;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\IdentityInterface;

class SiteController extends BaseController
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
//                    'logout' => ['post'],
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
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'oAuthSuccess'],
            ],
        ];
    }

    public function oAuthSuccess($client){
        // get user data from client
        $userAttributes = $client->getUserAttributes();
        $authclient = $this->request()->get('authclient');
        if($authclient && $authclient == 'facebook'){
            return Users::workingWithFB($userAttributes);
        }
        if($authclient && $authclient == 'twitter'){
            return Users::workingWithTW($userAttributes);
        }
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [
        ]);
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

    public function actionRegister()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new RegisterForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->app_type = Users::APP_TYPE_WEB;
            $model->created_date = Datetime::getDateNow(Datetime::SQL_DATETIME);
            if($model->save()){
                Users::updateToUserDetail($model->getId(), Yii::$app->request->post());
                return $this->redirect('/register-success.html');
            }
        }
        return $this->render('register', [
            'model' => $model,
            'email' => Yii::$app->session->get('email')
        ]);
    }
    public function actionRegisterSuccess(){
        return $this->render('register-success');
    }

    public function actionJobs(){
        return $this->render('jobs', []);
    }
    public function actionJobsSingle(){
        return $this->render('jobs-single', []);
    }

    public function actionLocation(){
        return $this->render('location', []);
    }
    public function actionLocationSingle(){
        return $this->render('location-single', []);
    }
    public function actionRecruiters(){
        return $this->render('recruiters', []);
    }
    public function actionFollowing(){
        return $this->render('following', []);
    }
    public function actionFollowSingle(){
        return $this->render('follow-single', []);
    }
    public function actionSingle(){
        return $this->render('single', []);
    }
    public function actionTerms(){
        return $this->render('terms', []);
    }
    public function actionServices(){
        return $this->render('services', []);
    }
    public function actionResume(){
        return $this->render('resume', []);
    }
    public function actionFeatures(){
        return $this->render('features', []);
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
    public function actionIntroduction()
    {
        return $this->render('introduction');
    }

    public function actionService($slug){
        $detail = Article::getArticleBySlug($slug);
        return $this->render('service', [
            'detail' => $detail
        ]);
    }

    /**
     * @return string
     */
    public function actionContruction()
    {
        $project = Article::getArticle('du-an', 16);
        return $this->render('contruction', [
            'project' => $project
        ]);
    }

    public function actionContructionDetail($slug)
    {
        $article = Article::getArticleBySlug($slug);
        return $this->render('contruction-detail', [
            'article' => $article
        ]);
    }
    public function actionQuotation()
    {
        return $this->render('quotation');
    }
    public function actionConsulting()
    {
        return $this->render('consulting');
    }

    public function actionNews()
    {
        $news = News::getLastNews(16);
        return $this->render('news', [
            'news' => $news
        ]);
    }

    public function actionNewsDetail($slug)
    {
        $detail = News::getNewsDetail($slug);
        return $this->render('news-detail', [
            'detail' => $detail
        ]);
    }

    public function actionLoadConsulting($id){
        $news = News::find()->select('content,name,news_category_id')->where(['news_category_id' => $id])->asArray()->one();
        if(count($news) > 0){
            return $this->jsonData($news);
        }else{
            $data = ['error' => true, 'message' => 'Không tìm thấy dữ liệu.'];
            return $this->jsonData($data);
        }
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
}
