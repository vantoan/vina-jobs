<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SpendManagementType */

$this->title = 'Create Spend Management Type';
$this->params['breadcrumbs'][] = ['label' => 'Spend Management Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spend-management-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
