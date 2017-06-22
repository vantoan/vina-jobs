<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Setting */

$this->title = 'Update Setting';
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Setting', 'url' => ['view', 'id' => 1]];
$this->params['breadcrumbs'][] = 'Update';

$input = new \app\components\tona\Input();
?>
<div class="setting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-xs-12">
            <?php $form = ActiveForm::begin(); ?>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Value</th>
                    <th>Default</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($data as $k => $value){
                    ?>
                    <tr>
                        <td><?= $k + 1 ?></td>
                        <td><?= $value->name ?></td>
                        <td><?= $value->code ?></td>
                        <td>
                            <?= $input->getInput($value->input, "value[".$value->code."]", $value->value, ['class' => 'form-control']) ?>
                        </td>
                        <td><?= $value->default ?></td>
                    </tr>
                    <?php
                } ?>
                </tbody>
            </table>

            <div class="form-group">
                <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-success']) ?>
                <?= Html::submitButton('Save change', ['class' => 'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>

    </div>

</div>
