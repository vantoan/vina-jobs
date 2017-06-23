<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Services';
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
        <div class="box_1">
            <h3>What we do</h3>
            <div class="col-md-5">
                <img src="/web/template/jobs/images/1.png" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-7 service_box1">
                <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</h5>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. </p>
                <a href="#" class="btn_3">Read More</a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="box_2">
            <h3>Resume Services</h3>
            <div class="col-md-4 icon-service">
                <div class="icon">
                    <i class="fa fa-calendar"></i>
                </div>
                <div class="icon-box-body">
                    <h4>Content here</h4>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s</p>
                </div>
            </div>
            <div class="col-md-4 icon-service">
                <div class="icon">
                    <i class="fa fa-lightbulb-o"></i>
                </div>
                <div class="icon-box-body">
                    <h4>Content here</h4>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s</p>
                </div>
            </div>
            <div class="col-md-4 icon-service">
                <div class="icon">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="icon-box-body">
                    <h4>Content here</h4>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s</p>
                </div>
            </div>
            <div class="col-md-4 icon-service">
                <div class="icon">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="icon-box-body">
                    <h4>Content here</h4>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s</p>
                </div>
            </div>
            <div class="col-md-4 icon-service">
                <div class="icon">
                    <i class="fa fa-bug"></i>
                </div>
                <div class="icon-box-body">
                    <h4>Content here</h4>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s</p>
                </div>
            </div>
            <div class="col-md-4 icon-service">
                <div class="icon">
                    <i class="fa fa-flash"></i>
                </div>
                <div class="icon-box-body">
                    <h4>Content here</h4>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="box_3">
            <h3>Clients say</h3>
            <div class="col-md-6 testimonial">
                <blockquote>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                </blockquote>
                <div class="author">
                    <figure class="author-img">
                        <img src="/web/template/jobs/images/f2.jpg" class="img-responsive" alt=""/>
                    </figure>
                    <h6>randomised</h6>
                    <span class="author-info">Designer, Compay Name</span>
                </div>
            </div>
            <div class="col-md-6 testimonial">
                <blockquote>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                </blockquote>
                <div class="author">
                    <figure class="author-img">
                        <img src="/web/template/jobs/images/f1.jpg" class="img-responsive" alt=""/>
                    </figure>
                    <h6>alteration</h6>
                    <span class="author-info">Designer, Compay Name</span>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>