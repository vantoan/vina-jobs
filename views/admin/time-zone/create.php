<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TimeZone */

$this->title = 'Create Time Zone';
$this->params['breadcrumbs'][] = ['label' => 'Time Zones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-zone-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
