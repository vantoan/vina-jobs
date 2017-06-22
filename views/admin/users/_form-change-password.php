<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-4"><?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?></div>
        <div class="col-lg-4"><?= $form->field($model, 'new_password')->textInput(['maxlength' => true]) ?></div>
        <div class="col-lg-4"><?= $form->field($model, 'renew_password')->passwordInput(['maxlength' => true]) ?></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
