<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SpendManagementType */

$this->title = 'Update Spend Management Type: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Spend Management Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spend-management-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
