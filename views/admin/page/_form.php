<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-xs-7 group-img">
            <?php
            $data =  \app\models\Page::categoriesMenus(false);
            $listData = \yii\helpers\ArrayHelper::map($data,'id','name');
            ?>
            <?= $form->field($model, 'parent_id')->dropDownList($listData, [
                'prompt'    => 'Select...',
                'class' => 'select2_group form-control'
            ]) ?>
        </div>
        <div class="col-xs-5 group-img">
            <?php
            $data =  \app\components\tona\Cons::$page_template;
            ?>
            <?= $form->field($model, 'pape_template')->dropDownList($data, [
                'prompt'    => 'Select...',
                'class' => 'select2_group form-control'
            ]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 group-img no-padding-right">
            <?= $form->field($model, 'img')->textInput(['maxlength' => true, 'class' => 'form-control get-img']) ?>
        </div>
        <div class="col-xs-2 no-padding-left">
            <div class="form-group">
                <label class="control-label" for="">&nbsp;</label>
                <span class="input-group-btn">
                    <a href="#" class="btn btn-default openFinder w100 preventDefault" data-target=".get-img">Select</a>
                </span>
            </div>
        </div>
    </div>

    <?php
    $readOnly = false;
    if(!$model->isNewRecord){
        $readOnly = true;
    }
    ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'class' => $readOnly ? 'form-control' : 'form-control createSlug', 'data-target' => '#page-slug']) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true, 'readonly' => $readOnly]) ?>

    <?= $form->field($model, 'content')->textarea(['maxlength' => true, 'id' => 'page-content']) ?>

    <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_description')->textInput(['maxlength' => true]) ?>

    <?php
    if($model->isNewRecord){
        $model->actived = 1;
    }
    ?>
    <?= $form->field($model, 'actived')->checkbox(['class' => 'flat']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Back to list', ['index'], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
