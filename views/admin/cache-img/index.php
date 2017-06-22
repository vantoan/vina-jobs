<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\CacheImgSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cache Imgs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cache-img-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Clear cache', ['clear-all'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'object_id',
            'object_type',
            'img_size',
            'img_path',
             'created_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
