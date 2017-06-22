<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Search\EventsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'type_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'all_day') ?>

    <?php // echo $form->field($model, 'start') ?>

    <?php // echo $form->field($model, 'end') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'className') ?>

    <?php // echo $form->field($model, 'editable') ?>

    <?php // echo $form->field($model, 'startEditable') ?>

    <?php // echo $form->field($model, 'durationEditable') ?>

    <?php // echo $form->field($model, 'resourceEditable') ?>

    <?php // echo $form->field($model, 'rendering') ?>

    <?php // echo $form->field($model, 'overlap') ?>

    <?php // echo $form->field($model, 'constraint') ?>

    <?php // echo $form->field($model, 'source') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'backgroundColor') ?>

    <?php // echo $form->field($model, 'borderColor') ?>

    <?php // echo $form->field($model, 'textColor') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
