<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<!--<div class="container">
    <div class="site-error">

        <h1><?/*= Html::encode($this->title) */?></h1>

        <div class="alert alert-danger">
            <?/*= nl2br(Html::encode($message)) */?>
        </div>

        <p>
            The above error occurred while the Web server was processing your request.
        </p>
        <p>
            Please contact us if you think this is a server error. Thank you.
        </p>

    </div>

</div>-->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2><?= Html::encode($this->title) ?></h2>
                <div class="error-details">
                    <?= nl2br(Html::encode($message)) ?>
                </div>
                <div class="error-actions">
                    <a href="<?= \app\components\tona\Helper::siteURL(); ?>" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a>
                    <a href="<?= \app\components\tona\Helper::siteURLAnd('contact.html'); ?>" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>
            </div>
        </div>
    </div>
</div>
