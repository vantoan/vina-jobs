<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Search\SearchSpendManagement */
/* @var $form yii\widgets\ActiveForm */

$time = \Carbon\Carbon::now(\app\components\tona\Common::currentUser('timezone'));
$current_time = $time->format(\app\components\tona\Datetime::VIEW_DATETIME_dmYHi);
$first_day = $time->startOfDay()->format(\app\components\tona\Datetime::VIEW_DATETIME_dmYHi);
?>

<div class="spend-management-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'POST',
        'id'    => 'from-filter'
    ]); ?>

    <div class="row collapse" id="filter-s-mn">
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <?php
            $data =  \app\models\SpendManagementType::find()->where('status = :status', [':status' => 1])->all();
            ?>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <?= $form->field($model, 'type_of_expenditure') ?>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <?= $form->field($model, 'name') ?>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <?php  echo $form->field($model, 'money') ?>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <?php  echo $form->field($model, 'created_by') ?>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <?php  echo $form->field($model, 'created_at') ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
            <?php
            $data =  \app\models\SpendManagementType::find()->where('status = :status', [':status' => 1])->all();
            $listData = \yii\helpers\ArrayHelper::map($data,'id','name');
            ?>
            <?= $form->field($model, 'type')->dropDownList($listData, [
                'prompt'    => 'All',
                'class' => 'select2_group form-control'
            ]) ?>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
            <?php
            echo $form->field($model, 'from_time')->textInput(['data-date-time-format' => 'DD/MM/YYYY', 'class' => 'datetimepicker1 form-control']) ?>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
            <?php
            echo $form->field($model, 'to_time')->textInput(['data-date-time-format' => 'DD/MM/YYYY', 'class' => 'datetimepicker1 form-control']) ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
            <label>&nbsp;</label>
            <div class="form-group">
                <?= Html::button('Filter', ['class' => 'btn btn-primary loading', 'data-loading-text' => "<i class='fa fa-spinner fa-spin '></i> Searching...",'id' => 'doSearch']) ?>
                <!--<a href="#" class="btn btn-primary" data-toggle="collapse" data-target="#filter-s-mn">Options</a>-->
                <?php // echo Html::resetButton('Reset', ['class' => 'btn btn-default']); ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
