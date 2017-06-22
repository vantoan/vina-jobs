<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'news_category_id',
            [
                'label'=>'news_category_id',
                'format'=>'html',
                'value' => function($data){
                    return \app\models\NewsCategory::getCategoryName($data->news_category_id);
                }
            ],
            'name',
            'description',
//            'content:ntext',
            // 'slug',
            // 'image',
            // 'video',
             'view',
            // 'sorted',
            // 'source',
            // 'start',
            // 'created_by',
            // 'created_at',
            // 'updated_by',
            // 'updated_at',
//             'status',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
