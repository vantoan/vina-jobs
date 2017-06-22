<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $data =  \app\models\ArticleCategory::categoriesMenus(false);
    $listData = \yii\helpers\ArrayHelper::map($data,'id','name');
    ?>
    <?= $form->field($model, 'category_id')->dropDownList($listData, [
        'prompt'    => 'Select...',
        'class' => 'select2_group form-control'
    ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'class' => 'form-control createSlug', 'data-target' => '#article-slug']) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true, 'readonly' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6, 'class' => 'contents']) ?>

    <div class="row">
        <div class="col-xs-10 no-padding-right"><?= $form->field($model, 'image')->textInput(['maxlength' => true, 'class' => 'form-control get-img']) ?></div>
        <div class="col-xs-2 no-padding-left">
            <div class="form-group">
                <label class="control-label" for="">&nbsp;</label>
                    <span class="input-group-btn">
                        <a href="#" class="btn btn-default openFinder w100 preventDefault" data-target=".get-img" data-folder="Images">Select</a>
                    </span>
            </div>
        </div>
    </div>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tag')->textInput(['maxlength' => true]) ?>

<!--    <?/*= $form->field($model, 'created_by')->textInput() */?>

    <?/*= $form->field($model, 'created_at')->textInput() */?>

    <?/*= $form->field($model, 'updated_by')->textInput() */?>

    <?/*= $form->field($model, 'updated_at')->textInput() */?>
    -->
    <?= $form->field($model, 'source')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'is_comment')->checkbox(['class' => 'flat']) ?>
    <?= $form->field($model, 'star')->checkbox(['class' => 'flat']) ?>

    <?php if($model->isNewRecord){ $model->status = 1;  } ?>
    <?= $form->field($model, 'status')->checkbox(['class' => 'flat']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Back to list', ['index'], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
