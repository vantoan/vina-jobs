<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SpendManagement */

$this->title = 'Update Spend Management: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Spend Managements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spend-management-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
