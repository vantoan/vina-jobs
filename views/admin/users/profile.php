<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \app\components\tona\Role;
use \app\components\tona\Helper;
use \app\components\tona\Common;
/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-8 col-lg-offset-3 col-xs-offset-2">
                <div class="row login_box">
                    <div class="col-md-12 col-xs-12" align="center">
                        <div class="line"><h3><?= \app\components\tona\Datetime::getTimeNow() ?></h3></div>
                        <div class="outter"><img src="<?= Helper::userAvatar() ?>" class="image-circle"/></div>
                        <h1>Hi <?= Common::currentUser('name') ?></h1>
                        <span>Role: Admin</span>
                    </div>
                    <div class="col-md-6 col-xs-6 follow line" align="center">
                        <h3>
                            <span>REGISTER</span>
                            <br/>
                            125651
                        </h3>
                    </div>
                    <div class="col-md-6 col-xs-6 follow line" align="center">
                        <h3>
                            <span>LAST LOGIN</span>
                            <br/>
                            125651
                        </h3>
                    </div>

                    <div class="col-md-12 col-xs-12 login_control">

                        <div class="control">
                            <div class="label">Username</div>
                            <input readonly type="text" class="form-control" value="<?= Common::currentUser('username') ?>"/>
                        </div>

                        <div class="control">
                            <div class="label">Timezone</div>
                            <input type="text" readonly class="form-control" value="<?= Common::currentUser('timezone') ?>"/>
                        </div>

                        <div class="control">
                            <div class="label">Status</div>
                            <input type="checkbox" class="flat" value="1" <?php if(Common::currentUser('status') == 1){ echo 'checked'; } ?> disabled>
                        </div>

                        <div align="center">
                            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
