<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Search\SearchSpendManagement */
/* @var $form yii\widgets\ActiveForm */

$time = \Carbon\Carbon::now(\app\components\tona\Common::currentUser('timezone'));
$current_time = $time->format(\app\components\tona\Datetime::VIEW_DATETIME_dmYHi);
$first_day = $time->startOfDay()->format(\app\components\tona\Datetime::VIEW_DATETIME_dmYHi);

?>

<div class="spend-management-search">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'id'    => 'f-filter-spend-management',
        'method' => 'get',
    ]); ?>

    <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6">
            <div class="form-group ">
                <label class="control-label" for="searchspendmanagement-name">From date</label>
                <input type="text" id="" data-date-time-format="DD/MM/YYYY HH:mm" class="form-control datetimepicker1" name="from-date" value="<?= $first_day ?>">
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <div class="form-group field-searchspendmanagement-name">
                <label class="control-label" for="searchspendmanagement-name">To date</label>
                <input type="text" id="" data-date-time-format="DD/MM/YYYY HH:mm" class="form-control datetimepicker1" name="to-date" value="<?= $current_time ?>">
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <label class="control-label" for="searchspendmanagement-name">&nbsp;</label>
            <div class="form-group">
                <?= Html::button('Search', ['class' => 'btn btn-primary', 'id' => 'doSearch']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
