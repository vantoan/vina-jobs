<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use \app\components\tona\Helper;

$page = \app\components\PageWidget::page('lien-he');
$this->title = $page->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="<?= Helper::siteURL() ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                    <li class="active"><?= Html::encode($this->title) ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="map">
        <?php // echo $page->content; ?>
        <img src="<?= Helper::siteURL()?>/web/uploads/map.jpg" width="100%" />
    </div>

    <div class="container">
        <div class="site-contact">
            <h1>Thông tin liên hệ</h1>

            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                <div class="alert alert-success">
                    Cảm ơn bạn đã liên hệ với chúng tôi. Chúng tôi sẽ trả lời sớm nhất có thể
                </div>

                <!--<p>
                    Note that if you turn on the Yii debugger, you should be able
                    to view the mail message on the mail panel of the debugger.
                    <?php /*if (Yii::$app->mailer->useFileTransport): */?>
                        Because the application is in development mode, the email is not sent but saved as
                        a file under <code><?/*= Yii::getAlias(Yii::$app->mailer->fileTransportPath) */?></code>.
                                                                                                            Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                        application component to be false to enable email sending.
                    <?php /*endif; */?>
                </p>-->

            <?php else: ?>

                <p>
                    Nếu bạn có yêu cầu kinh doanh hoặc các câu hỏi khác, vui lòng điền vào mẫu dưới đây để liên hệ với chúng tôi.
                    <br>Cảm ơn bạn.
                </p>

                <div class="row">
                    <div class="col-lg-5">

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'subject') ?>

                        <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Gửi', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                    </div>
                </div>

            <?php endif; ?>
        </div>
    </div>
</section>

