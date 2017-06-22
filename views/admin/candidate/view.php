<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Candidate */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Candidates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidate-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'title',
            'job_category_id',
            'skill',
            'location',
            'video',
            'resume_content:ntext',
            'resume_file',
            'social_network',
            'experience',
            'created_by',
            'created_at',
            'updated_by',
            'updated_at',
            'approved_by',
            'approved_at',
            'view',
            'sorted',
            'star',
            'status',
        ],
    ]) ?>

</div>
