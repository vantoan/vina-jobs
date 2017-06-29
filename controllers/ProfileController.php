<?php

namespace app\controllers;

use app\components\tona\Cons;
use app\components\tona\Helper;
use app\components\tona\Login;
use app\forms\ProfileForm;
use app\forms\RegisterForm;
use Yii;
use app\models\Users;
use app\models\UsersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class ProfileController extends BaseController
{

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

    public function actionActiveAcount($token){
        $actived = Users::doActiveAccount($token);
        return $this->render('active-account', ['actived' => $actived]);
    }

    public function actionForgotPassword(){

        return $this->render('password-forgot-results');
    }

    public function actionUpdatePassword($token = null){

        return $this->render('password-update');
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
    public function actionView($username)
    {
        return $this->render('view', [
            'model' => $this->findModel($username),
        ]);
    }

    /**
     * Displays a single Users model.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($username)
    {
        $data = $this->findModel($username);
        $form = new ProfileForm();
        $form->bindToForm($data);

        return $this->render('update', [
            'user' => $this->findModel($username),
            'model' => $form,
        ]);
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
        if (($model = Users::find()->where(['username' => $id])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
