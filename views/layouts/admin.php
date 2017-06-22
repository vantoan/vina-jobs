<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\admin\AppAsset;
use \yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <link rel='shortcut icon' type='image/x-icon' href='<?= \app\components\tona\Helper::siteURL() ?>/favicon.ico' />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= Html::csrfMetaTags() ?>
    <title>Admin <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?></title>
</head>

<body class="<?= \app\components\tona\Helper::getCookie('nav-md~nav-sm'); ?>">
<?php $this->beginBody() ?>
<div class="container body">
    <div class="main_container">
        <?= $this->render('admin/sidebar') ?>

        <!-- top navigation -->
        <?= $this->render('admin/top-navigation') ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?= $content ?>
            <div class="clearfix"></div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?= $this->render('admin/footer') ?>
        <!-- /footer content -->
    </div>

    <?= \app\components\ChatWidget::widget(); ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>