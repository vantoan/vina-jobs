<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use \yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->registerJsFile('/vendor/bower/fullcalendar/dist/fullcalendar.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile('/vendor/bower/fullcalendar/dist/locale-all.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

$this->title = 'My Calendar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::button('Create Events', ['class' => 'btn btn-success create-event']) ?>
	</p>

	<div class="row">
		<div class="col-lg-12">
			<button id="my-button">AAA</button>
			<div id='calendar'></div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="event-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<?php $form = ActiveForm::begin([
			'id' => 'form-event',
			'options' => ['class' => 'form-horizontal'],
			]) ?>
			<input type="hidden" name="id" value="0">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Create event</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="formGroupExampleInput">Title</label>
									<input type="text" name="title" class="form-control" id="formGroupExampleInput"
									       placeholder="Title">
								</div>
								<div class="form-group">
									<label for="formGroupExampleInput2">Description</label>
									<textarea class="form-control" name="description" id="formGroupExampleInput2"
									          placeholder="Descrition"></textarea>
								</div>

								<div class="row">
									<div class='col-sm-6'>
										<div class="form-group">
											<label for="formGroupExampleInput2">From</label>

											<div class='input-group date' id='datetimepicker6'>
												<input type='text' name="from" class="form-control"/>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
											</div>
										</div>
									</div>
									<div class='col-sm-6'>
										<div class="form-group">
											<label for="formGroupExampleInput2">To</label>

											<div class='input-group date' id='datetimepicker7'>
												<input type='text' name="to" class="form-control"/>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary save-event">Save</button>
					</div>
				</div>
			<?php ActiveForm::end() ?>
		</div>
	</div>
</div>
