<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CacheImg */

$this->title = 'Update Cache Img: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cache Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cache-img-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
