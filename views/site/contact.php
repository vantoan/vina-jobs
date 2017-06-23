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

<div class="banner_1">
    <div class="container">
        <div id="search_wrapper1">
            <div id="search_form" class="clearfix">
                <h1>Start your job search</h1>
                <p>
                    <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
                    <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
                    <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="single">
        <div class="contact_top">
            <h2>Our Addresses</h2>
            <div class="col-sm-4">
                <address class="addr">
                    <p class="secondary3">
                        8901 Marmora Road, <br>
                        Glasgow, D04 89GR.</p>
                    <dl>
                        <dt>Freephone:</dt>
                        <dd>
                            +1 2587 4677 236
                        </dd>
                    </dl>
                    <dl>
                        <dt>Telephone:</dt>
                        <dd>
                            +1 2587 4677 236
                        </dd>
                    </dl>
                    <dl>
                        <dt>FAX:</dt>
                        <dd>
                            +1 2587 4677 236
                        </dd>
                    </dl>
                    <dl class="email">
                        <dt>E-mail:</dt>
                        <dd>
                            <a href="malito:mail@demolink.org">mail(at)Seeking.com</a>
                        </dd>
                    </dl>
                </address>
            </div>
            <div class="col-sm-4">
                <address class="addr">
                    <p class="secondary3">
                        58701 Lorem Ipsum, <br>
                        nulla pariatur.</p>
                    <dl>
                        <dt>Freephone:</dt>
                        <dd>
                            +1 2587 4677 236
                        </dd>
                    </dl>
                    <dl>
                        <dt>Telephone:</dt>
                        <dd>
                            +1 2587 4677 236
                        </dd>
                    </dl>
                    <dl>
                        <dt>FAX:</dt>
                        <dd>
                            +1 2587 4677 236
                        </dd>
                    </dl>
                    <dl class="email">
                        <dt>E-mail:</dt>
                        <dd>
                            <a href="malito:mail@demolink.org">mail(at)Seeking.com</a>
                        </dd>
                    </dl>
                </address>
            </div>
            <div class="col-sm-4">
                <address class="addr">
                    <p class="secondary3">
                        578 Marmora Road, <br>
                        Lorem Ipsum, D04 89GR.</p>
                    <dl>
                        <dt>Freephone:</dt>
                        <dd>
                            +1 2587 4677 236
                        </dd>
                    </dl>
                    <dl>
                        <dt>Telephone:</dt>
                        <dd>
                            +1 2587 4677 236
                        </dd>
                    </dl>
                    <dl>
                        <dt>FAX:</dt>
                        <dd>
                            +1 2587 4677 236
                        </dd>
                    </dl>
                    <dl class="email">
                        <dt>E-mail:</dt>
                        <dd>
                            <a href="malito:mail@demolink.org">mail(at)Seeking.com</a>
                        </dd>
                    </dl>
                </address>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="content_bottom">
            <h3>Contact Form</h3>
            <form>
                <div class="contact_box1">
                    <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                    <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:3%">
                    <input type="text" class="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" style="margin-left:3%">
                </div>
                <div class="text_1">
                    <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                </div>
                <div class="form-submit1 form_but1">
                    <input name="submit" type="submit" id="submit" value="Submit"><br>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1385.6556051415464!2d106.61999485877293!3d10.79400295063155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bf8843458f9%3A0x5b2aa18ea68844c8!2zMTQzLzcwIEfDsiBE4bqndSwgVMOibiBRdcO9LCBUw6JuIFBow7osIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1498234303660" ></iframe>
</div>
