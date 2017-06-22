<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\components\tona\Common;
use app\components\SiteWidget;
use \app\components\tona\Helper;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) .' | '. Helper::siteURL(true) ?></title>
        <?php $this->head() ?>
        <link rel='shortcut icon' type='image/x-icon' href='<?= \app\components\tona\Helper::siteURL() ?>/favicon.ico' />

        <!-- Yoast SEO plugin. -->
        <meta name="description" content="<?= Helper::getSeo('description') ?>"/>
        <meta name="robots" content="noodp"/>
        <link rel="canonical" href="<?= Helper::siteURL() ?>" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?= Html::encode($this->title) ?>" />
        <meta property="og:description" content="<?= Helper::getSeo('description') ?>" />
        <meta property="og:url" content="<?= Helper::siteURL() ?>" />
        <meta property="og:site_name" content="Jobs" />
        <meta property="article:author" content="<?= Helper::siteURL() ?>" />
        <meta property="article:section" content="<?= Helper::getSeo('keyword') ?>" />
        <meta property="article:published_time" content="2015-12-12T14:08:51+00:00" />
        <meta property="article:modified_time" content="2015-12-12T18:19:26+00:00" />
        <meta property="og:updated_time" content="2015-12-12T18:19:26+00:00" />
        <meta property="fb:admins" content="<?= Helper::siteURL() ?>" />
        <meta property="og:image" content="<?= Helper::siteURL() ?>" />
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:description" content="<?= Helper::getSeo('description') ?>"/>
        <meta name="twitter:title" content="<?= Html::encode($this->title) ?>"/>
        <meta name="twitter:site" content="@Jobs"/>
        <meta name="twitter:image" content="http://vina-jobs.com/"/>
        <meta name="twitter:creator" content="@Jobs"/>
        <!-- / Yoast SEO plugin. -->

        <!--Core CSS -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body >
    <?php

//    \app\components\UserOnlineWidget::getStatistic();
    \app\components\LogSystemWidget::createLogs();
    ?>

    <!-- Section -->

    <div id="wrapper">
        <!-- start header -->
        <header>
            <?= $this->render('taco_partial/header') ?>
        </header>
        <!-- end header -->
        <section id="action-content" class="<?= Yii::$app->controller->id ?>-<?= Yii::$app->controller->action->id ?>">
            <?= $content ?>
        </section>
        <footer>
            <?= $this->render('taco_partial/footer') ?>
        </footer>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

    <!-- Section End -->

    <?= $this->render('_auto_load/index') ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>