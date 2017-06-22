<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\Carousel */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Carousels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carousel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('List', ['/admin/carousel/', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=  Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="row">
        <div class="col-xs-6">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'name',
                    'description:ntext',
                    'slug',
                    'status',
                ],
            ]) ?>
        </div>
    </div>

    <?php
    Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'carousel_id',
//            'img_thum',
//            'img_view',
            [
                'label'=>'Image',
                'format'=>'raw',
                'value' => function($data){
                    $url = $data->img_view;
                    return Html::img($url,['alt'=>'yii', 'width' => 150]);
                }
            ],
//            'img_original',
             'title',
             'description:ntext',
//             'link',
            [
                'label'=>'Link',
                'format'=>'html',
                'value' => function($data){
                    return Html::a($data->link, $data->link);
                }
            ],
             'sorted',
//             'status',
            [
                'label'=>'Status',
                'format'=>'html',
                'value' => function($data){
                    if($data->status == 1){
                        return '<span class="glyphicon glyphicon-check"></span>';
                    }else{
                        return '<span class="glyphicon glyphicon-eye-close"></span>';
                    }
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}',
                'buttons' => [
                    'update' => function ($url, $data) {
                        return Html::a(
                            '<span class="glyphicon glyphicon-pencil"></span>', '/admin/carousel-items/update?id='. $data->id);
                    }
                ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>
    <?= Html::a('Add item', ['/admin/carousel-items/create', 'carousel_id' => $model->id], ['class' => 'btn btn-primary']) ?>
</div>
