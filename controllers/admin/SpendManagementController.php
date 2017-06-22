<?php

namespace app\controllers\admin;

use app\components\tona\Common;
use app\components\tona\Datetime;
use Carbon\Carbon;
use Yii;
use app\models\SpendManagement;
use app\models\Search\SearchSpendManagement;
use yii\db\Query;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\tona\Helper;

/**
 * SpendManagementController implements the CRUD actions for SpendManagement model.
 */
class SpendManagementController extends BaseController
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
					'delete' => ['GET'],
				],
			],
		];
	}

	/**
	 * Lists all SpendManagement models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		if (Yii::$app->request->isAjax) {
			$dataForm = Yii::$app->request->post();
			$data = (new SearchSpendManagement())->searchAjax($dataForm);
			return $this->jsonData($data);
		}

		$time = \Carbon\Carbon::now(\app\components\tona\Common::currentUser('timezone'));

		$searchModel = new SearchSpendManagement();
		$searchModel->to_time = $time->format(\app\components\tona\Datetime::INPUT_DMY);
		$searchModel->from_time = $time->startOfDay()->format(\app\components\tona\Datetime::INPUT_DMY);

		return $this->render('index', [
			'searchModel' => $searchModel,
			'model' => $model = new SpendManagement()
		]);
	}

	/**
	 * Displays a single SpendManagement model.
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
	 * Creates a new SpendManagement model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate()
	{
		$model = new SpendManagement();

		if ($model->load(Yii::$app->request->post())) {
			$post = Yii::$app->request->post();
			$date = $post['SpendManagement']['time'];
			$model->time = Carbon::createFromFormat(Datetime::INPUT_MDYHiA, $date, Common::currentUser('timezone'))->format('Y-m-d H:i:s');
			$model->setToSave();
			if ($model->save()) {
				return $this->redirect(['index', 'id' => $model->id]);
			}
		} else {
			return $this->render('create', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Updates an existing SpendManagement model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);

		if ($model->load(Yii::$app->request->post())) {
			$post = Yii::$app->request->post();
			$date = $post['SpendManagement']['time'];
			$model->time = Carbon::createFromFormat(Datetime::INPUT_MDYHiA, $date, Common::currentUser('timezone'))->format('Y-m-d H:i:s');
			$model->setToUpdate();
			if ($model->save()) {
				return $this->redirect(['index', 'id' => $model->id]);
			}
		} else {
			return $this->render('update', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Deletes an existing SpendManagement model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionDelete($id)
	{
		$error = false;
		$message = '';
		$model = SpendManagement::findOne($id);
		$model->is_deleted = 1;
		if(!$model->save()){
			$error = true;
			$message = 'Can not delete this item.';
		}
		return $this->jsonData(['error' => $error, 'message' => $message]);
	}

	/**
	 * Finds the SpendManagement model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return SpendManagement the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = SpendManagement::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
