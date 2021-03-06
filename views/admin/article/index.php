<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'category_id',
            [
                'label'=>'Category',
                'format'=>'html',
                'value' => function($data){
                    return \app\models\Article::getCategoryName($data->category_id);
                }
            ],
//            'type_id',
            'name',
            'slug',
            // 'content:ntext',
            // 'image',
            // 'description:ntext',
            // 'keyword',
            // 'tag',
            // 'view',
            // 'created_by',
            // 'created_at',
            // 'updated_by',
            // 'updated_at',
            // 'star',
            // 'source',
            // 'is_comment',
            // 'comment_totel',
            // 'is_deleted',
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

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
