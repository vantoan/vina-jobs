<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use \app\components\tona\Role;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if(Role::checkAdminTN()){ ?>
    <p>
        <?= Html::a('Create Page', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php } ?>

<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'parent_id',
            [
                'label'=>'parent_id',
                'format'=>'raw',
                'value' => function($data){
                    return \app\models\Page::getPageByParentId($data->parent_id);
                }
            ],
            'name',
            'slug',
            'seo_title',
            // 'seo_keyword',
            // 'seo_description',
            // 'img',
             'view',
            // 'actived',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => function ($url,$model) {
                        return Html::a(
                            '<span class="glyphicon glyphicon-pencil"></span>',
                            $url);
                    },
                    'delete' => function ($url,$model,$key) {
                        if(Role::checkAdminTN()){
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', '/admin/page/delete?id='. $model->id, [
                                'title' => "Delete",
                                'aria-label' => "Delete",
                                'data-confirm' => "Are you sure you want to delete this item ?",
                                'data-method' => "post",
                                'data-pjax' => 0
                            ]);
                        }
                    }
                ],
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
