<?php

use yii\helpers\Html;
use \yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = 'Database';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>
                    <button type="submit" class="btn btn-primary" name="backup_db">Backup database</button>
                <?php \yii\bootstrap\ActiveForm::end(); ?>
            </div>
            <div class="col-lg-12">
                <?php if($files) { ?>
                <table id="spend-management-template" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="type">No.</th>
                        <th class="name">Name</th>
                        <th class="time">Time</th>
                        <th class="status">Download</th>
                        <th class="action">Action</th>
                    </tr>
                    </thead>
                    <tbody">
                    <?php foreach($files as $k => $file){ ?>
                    <tr>
                        <td class="type"><?= $k + 1 ?></td>
                        <td class="name"><?= $file['name'] ?></td>
                        <td class="time"><?= $file['time'] ?></td>
                        <td class="status">
                            <a href="<?= $file['path'] ?>" download="<?= $file['name'] ?>"><span class="glyphicon glyphicon-download-alt"></span></a>
                        </td>
                        <td class="action">
                            <a href="<?= Url::to('/admin/admin/backup-db?delete='.$file['name']) ?>" title="DELETE" data-widget="confirm-delete" data-confirm-text="Are you sure you want to delete this item?"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <?php }else{ ?>
                    <p>No database.</p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
