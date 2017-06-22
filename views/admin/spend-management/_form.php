<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \app\components\tona\Datetime;

/* @var $this yii\web\View */
/* @var $model app\models\SpendManagement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spend-management-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $data =  \app\models\SpendManagementType::find()->where('status = :status', [':status' => 1])->all();
    $listData = \yii\helpers\ArrayHelper::map($data,'id','name');
    ?>
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <?= $form->field($model, 'type')->dropDownList($listData, [
                'prompt'    => 'Chọn...',
                'class' => 'select2_group form-control'
            ]) ?>
        </div>
        <div class="col-sm-6 col-xs-12">
            <?php
            $type =  \app\models\SpendManagement::$listType;
            if($model->isNewRecord){
                $model->type_of_expenditure = \app\models\SpendManagement::TYPE_EXPORT;
            }
            ?>
            <?= $form->field($model, 'type_of_expenditure')->dropDownList($type, [
                'prompt'=>'Chọn...',
                'class' => 'select2_group form-control'
            ]); ?>
        </div>
    </div>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-sm-6 col-xs-12 moneys">
            <?php
            $model->money_view = $model->money;
            ?>
            <?= $form->field($model, 'money_view')->textInput(['class' => 'money-v form-control']) ?>
            <?= $form->field($model, 'money')->hiddenInput(['class' => 'money'])->label(false) ?>
        </div>
        <div class="col-sm-6 col-xs-12">
            <?php
            if($model->isNewRecord){
                $model->time = Datetime::getDateNow(Datetime::INPUT_MDYHiA);
            }else{
                $model->time = \Carbon\Carbon::createFromFormat(\app\components\tona\Datetime::SQL_DATETIME, $model->time)->format(Datetime::INPUT_MDYHiA);
            }
            ?>
            <?= $form->field($model, 'time')->textInput(['class' => 'datetimepicker1 form-control']) ?>
        </div>
    </div>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php 
    if($model->isNewRecord){
        $model->status = \app\components\tona\Cons::STATUS_ACTIVE;
    }
    ?>
    <?= $form->field($model, 'status')->checkbox(['class' => 'flat']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success loading' : 'btn btn-primary loading', 'data-loading-text' => "<i class='fa fa-spinner fa-spin '></i> Saving..."]) ?>
        <?= Html::a('Back', ['index'], ['class' => 'btn btn-default loading']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
