<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CarouselItems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carousel-items-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $data =  \app\models\Carousel::find()->all();
    $listData = \yii\helpers\ArrayHelper::map($data,'id','name');
    ?>
    <div class="row">
        <div class="col-xs-5">
        <?php
        if($model->isNewRecord){
            $model->carousel_id = $carousel_id;
        } ?>
        <?= $form->field($model, 'carousel_id')->dropDownList($listData, [
            'prompt'    => 'Select...',
            'class' => 'select2_group form-control'
        ]) ?>
        </div>
        <div class="col-xs-7">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-9 no-padding-right"><?= $form->field($model, 'img_view')->textInput(['maxlength' => true, 'class' => 'form-control get-img']) ?></div>
        <div class="col-xs-3 no-padding-left">
            <div class="form-group">
                <label class="control-label" for="">&nbsp;</label>
                <span class="input-group-btn">
                    <a href="#" class="btn btn-default openFinder w100 preventDefault" data-target=".get-img">Select</a>
                </span>
            </div>
        </div>
    </div>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="row">
        <div class="col-xs-9">
            <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2">
            <?= $form->field($model, 'target')->dropDownList(\app\components\tona\Cons::$a_target, [
                'prompt'    => 'Select...',
                'class' => 'form-control'
            ]) ?>
        </div>
        <div class="col-xs-1">
            <?= $form->field($model, 'sorted')->textInput() ?>
        </div>
    </div>

    <?php if($model->isNewRecord){ $model->status = 1;  } ?>
    <?= $form->field($model, 'status')->checkbox(['class' => 'flat']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
