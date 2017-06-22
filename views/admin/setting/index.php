<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SettingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Settings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Setting', ['update'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="row">
        <div class="col-xs-12">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Value</th>
                    <th>Default</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($data as $k => $value){
                    ?>
                    <tr>
                        <td><?= $k + 1 ?></td>
                        <td><?= $value->name ?></td>
                        <td><?= $value->code ?></td>
                        <td><?= $value->value ?></td>
                        <td><?= $value->default ?></td>
                    </tr>
                    <?php
                } ?>

                </tbody>
            </table>
        </div>

    </div>
</div>