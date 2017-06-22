<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="users-form">

    <?php
    $role =  \app\models\UserRole::find()->where('status = :status', [':status' => 1])->all();
//    $listRole = \yii\helpers\ArrayHelper::map($role,'id','name');

    $listRole = \app\components\tona\Role::getListRole();
    ?>

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-4"><?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?></div>
        <div class="col-lg-4"><?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?></div>
        <div class="col-lg-4"><?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?></div>
    </div>

    <div class="row">
        <div class="col-lg-4"><?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?></div>
        <div class="col-lg-4"><?= $form->field($model, 'access_token')->textInput(['maxlength' => true]) ?></div>
        <div class="col-lg-4"><?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?></div>
    </div>


    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'role')->dropDownList($listRole, [
                'prompt'=>'Select...',
                'class' => 'select2_group form-control'
            ]); ?>
        </div>
        <div class="col-lg-5 no-padding-right"><?= $form->field($model, 'avatar')->textInput(['maxlength' => true, 'class' => 'form-control get-img']) ?></div>
        <div class="col-lg-2 no-padding-left">
            <div class="form-group">
                <label class="control-label" for="">&nbsp;</label>
                <span class="input-group-btn">
                    <a href="#" class="btn btn-default openFinder preventDefault" data-target=".get-img">Select</a>
                </span>
            </div>
        </div>
    </div>

    <?php
    if($model->isNewRecord){
        $model->status = 1;
    }
    ?>
    <?= $form->field($model, 'status')->checkbox(['class' => 'flat']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
