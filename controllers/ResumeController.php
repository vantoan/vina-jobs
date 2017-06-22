<?php

namespace app\controllers;

use app\components\tona\Cons;
use app\components\tona\Helper;
use app\forms\RegisterForm;
use app\forms\ResumeForm;
use app\models\Candidate;
use Yii;
use app\models\Users;
use app\models\UsersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class ResumeController extends BaseController
{

    public function init(){
        $this->layout = Cons::TEMPLATE_RESUME;
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'onAuthSuccess'],
            ],
        ];
    }

    /**
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Users model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($username, $slug)
    {
        /*echo '<pre>';
        print_r([$username, $slug, 'ok']);
        echo '</pre>';
        die;
        echo '<pre>';
        print_r(Yii::$app->request->getQueryParams());
        echo '</pre>';
        die;*/

        return $this->render('view', [
            'model' => $this->findModel($slug),
        ]);
    }

    /**
     * Creates a new Users model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ResumeForm();
        $model->isNew = true;

        if(Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            $dataForm = Yii::$app->request->post();
            if($model->validate()){
                $model->file = UploadedFile::getInstance($model, 'file');
                $path = '';
                if($model->file){
                    $path = 'web/uploads/resume/' . $model->file->baseName . '.' . $model->file->extension;
                    $model->file->saveAs($path);
                }
                $save = $model->saveForm($dataForm, $path);
                if($save){
                    $url =  '/'.Helper::createSlug(Yii::$app->user->identity->name).'/view/'.$save->slug.'.html';
                    return $this->redirect($url);
                }
            }else{
                return $this->render('create', [
                    'model' => $model
                ]);
            }
        }

        return $this->render('create', [
            'model' => $model
        ]);

    }

    public function onAuthSuccess($client)
    {
        (new AuthHandler($client))->handle();
    }

    /**
     * Updates an existing Users model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($username, $slug)
    {

        $item = $this->findModel($slug);
        $model = new ResumeForm();
        $model->bindToForm($item);

        if(Yii::$app->request->isPost) {
            $model->load(\Yii::$app->request->post());
            $dataForm = Yii::$app->request->post();
            if ($model->validate()) {
                $model->file = UploadedFile::getInstance($model, 'file');
                $path = '';
                if ($model->file) {
                    $path = 'web/uploads/resume/' . $model->file->baseName . '.' . $model->file->extension;
                    $model->file->saveAs($path);
                }
                $save = $model->saveForm($dataForm, $path, $item->id);
                if ($save) {
                    $url = '/' . Helper::createSlug(Yii::$app->user->identity->name) . '/view/' . $save->slug . '.html';
                    return $this->redirect($url);
                }else{
                    return $this->render('update', [
                        'model' => $model,
                    ]);
                }
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }else{
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Users model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Candidate::find()->where(['slug' => $id])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * @return mixed
     */
    public function actionRegister(){
        if(Yii::$app->request->post()){
            $dataForm = Helper::arrayToObject(Yii::$app->request->post('RegisterForm'));
            if($dataForm->email){
                $register = RegisterForm::saveForm($dataForm);
                return Helper::jsonData($register);
            }
        }
    }
}
