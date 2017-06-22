<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CacheImg */

$this->title = 'Create Cache Img';
$this->params['breadcrumbs'][] = ['label' => 'Cache Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cache-img-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
