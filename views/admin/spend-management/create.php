<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SpendManagement */

$this->title = 'Tạo thu/chi';
$this->params['breadcrumbs'][] = ['label' => 'Spend Managements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spend-management-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
