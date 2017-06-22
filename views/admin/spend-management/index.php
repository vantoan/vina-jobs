<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\components\tona\Helper;
use yii\widgets\ActiveForm;
use \app\components\tona\Datetime;
use \yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\SearchSpendManagement */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Expenditure';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="spend-management-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <input type="hidden" id="spend-management-index"
        data-url-list="<?= \yii\helpers\Url::to('/admin/spend-management/index') ?>"
        >
    <p>
        <?= Html::a('Add expenditure', ['create'], ['class' => 'btn btn-success']) ?>
        <!--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Launch demo modal
        </button>-->
    </p>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php // echo $this->render('_search_filter', ['model' => $searchModel]); ?>
    <div class="row statistical">
        <div class="col-md-2">
            <p class="imp">Tổng thu: <span>0VNĐ</span></p>
        </div>
        <div class="col-md-2">
            <p class="exp">Tổng chi: <span>0VNĐ</span></p>
        </div>
    </div>
    <script type="text/template" id="spend-management-template-null">
        <tr>
            <td colspan="100%" class="text-center" style="font-size: 30px; padding: 50px;"><span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span></td>
        </tr>
    </script>
    <script type="text/template" id="spend-management-template">
        <% _.each(datas, function(item, key){ %>
        <tr>
            <td class="type">[<%= item.id %>]<%= item.type_name %></td>
            <td class="imp-exp"><%= item.type_of_expenditure %></td>
            <td class="name"><%= item.name %></td>
            <td class="des"><%= item.description %></td>
            <td class="money"><%= item.money %></td>
            <td class="time"><%= item.time %></td>
            <td class="status"><%= item.status %></td>
            <td class="action">
                <a href="<?= Url::to('/admin/spend-management/update') ?>?id=<%= item.id %>"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="<?= Url::to('/admin/spend-management/delete') ?>?id=<%= item.id %>" title="DELETE" data-widget="confirm-delete" data-confirm-text="Are you sure you want to delete this item?"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
        <% }); %>
    </script>
    <table id="spend-management-template" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th class="type">Type</th>
            <th class="imp-exp"><i class="fa fa-plus"></i>/<i class="fa fa-minus"></i></th>
            <th class="name">Name</th>
            <th class="des">Description</th>
            <th class="money">Amount</th>
            <th class="time">Time</th>
            <th class="status">Status</th>
            <th class="action">Action</th>
        </tr>
        </thead>
        <tbody id="spend-management-put">
        <tr>
            <td colspan="100%" class="text-center" style="font-size: 30px; padding: 50px;">
                <i class='fa fa-spinner fa-spin '></i>
            </td>
        </tr>
        </tbody>
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php $form = ActiveForm::begin(); ?>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="spend-management-form">
                    <?php
                    $data =  \app\models\SpendManagementType::find()->where('status = :status', [':status' => 1])->all();
                    $listData = \yii\helpers\ArrayHelper::map($data,'id','name');
                    ?>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <?= $form->field($model, 'type')->dropDownList($listData, [
                                'prompt'    => 'Chọn...',
                                'class' => 'form-control'
                            ]) ?>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <?php
                            $type =  \app\models\SpendManagement::$listType;
                            if($model->isNewRecord){
                                $model->type_of_expenditure = \app\models\SpendManagement::TYPE_EXPORT;
                            }
                            ?>
                            <?= $form->field($model, 'type_of_expenditure')->dropDownList($type, [
                                'prompt'=>'Chọn...',
                                'class' => 'form-control'
                            ]); ?>
                        </div>
                    </div>

                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <?= $form->field($model, 'money')->textInput() ?>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <?php
                            if($model->isNewRecord){
                                $model->time = Datetime::getDateNow(Datetime::VIEW_DATETIME_dmYHi);
                            }else{
                                $model->time = \Carbon\Carbon::createFromFormat(\app\components\tona\Datetime::SQL_DATETIME, $model->time)->format(Datetime::INPUT_DMYHi);
                            }
                            ?>
                            <?= $form->field($model, 'time')->textInput(['data-date-time-format' => 'DD/MM/YYYY HH:mm', 'class' => 'datetimepicker1 form-control']) ?>
                        </div>
                    </div>

                    <?php
                    if($model->isNewRecord){
                        $model->status = \app\components\tona\Cons::STATUS_ACTIVE;
                    }
                    ?>
                    <?= $form->field($model, 'status')->checkbox(['class' => 'flat']) ?>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>