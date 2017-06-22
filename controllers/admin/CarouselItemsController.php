<?php

namespace app\controllers\admin;

use Yii;
use app\models\CarouselItems;
use app\models\Search\CarouselItemsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CarouselItemsController implements the CRUD actions for CarouselItems model.
 */
class CarouselItemsController extends BaseController
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

    /**
     * Lists all CarouselItems models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CarouselItemsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CarouselItems model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CarouselItems model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($carousel_id = 0)
    {
        $model = new CarouselItems();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $carousel_id = Yii::$app->request->post();
            return $this->redirect(['/admin/carousel/view', 'id' => $carousel_id['CarouselItems']['carousel_id']]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'carousel_id'   => $carousel_id
            ]);
        }
    }

    /**
     * Updates an existing CarouselItems model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $carousel_id = Yii::$app->request->post();
            return $this->redirect(['/admin/carousel/view', 'id' => $carousel_id['CarouselItems']['carousel_id']]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CarouselItems model.
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
     * Finds the CarouselItems model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CarouselItems the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CarouselItems::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
