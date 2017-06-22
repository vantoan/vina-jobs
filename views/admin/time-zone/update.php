<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TimeZone */

$this->title = 'Update Time Zone: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Time Zones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="time-zone-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
