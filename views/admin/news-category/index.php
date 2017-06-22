<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create News Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'parent_id',
            [
                'label'=>'parent_id',
                'format'=>'html',
                'value' => function($data){
                    return \app\models\NewsCategory::getCategoryName($data->parent_id);
                }
            ],
            'name',
            'slug',
            'image',
            // 'content:ntext',
            // 'description',
            // 'sorted',
            // 'status',
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
