<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\CarouselSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carousels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carousel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Carousel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'description:ntext',
            'slug',
//            'status',
            [
                'attribute' => 'status',
                'format' => 'html',
                'value' => function($data) {
                    if($data->status == 1){
                        return '<i class="fa fa-check-square-o"></i>';
                    }else{
                        return '<i class="fa fa-close"></i>';
                    }
                },
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {link} {delete}',
                'buttons' => [
                    'update' => function ($url,$model) {
                        return Html::a(
                            '<span class="glyphicon glyphicon-pencil"></span>',
                            $url);
                    },
                    'link' => function ($url,$model,$key) {
                        return Html::a('<span class="glyphicon glyphicon-plus"></span>', '/admin/carousel-items/create?carousel_id='. $model->id);
                    },
                ],
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
