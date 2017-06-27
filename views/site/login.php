<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
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
        <div class="col-md-4">
            <div class="col_3">
                <h3>Todays Jobs</h3>
                <ul class="list_1">
                    <li><a href="#">Department of Health - Western Australia</a></li>
                    <li><a href="#">Australian Nursing Agency currently require experiences</a></li>
                    <li><a href="#">Russia Nursing Agency currently require experiences</a></li>
                    <li><a href="#">The Government of Western Saudi Arbia</a></li>
                    <li><a href="#">Department of Health - Western Australia</a></li>
                    <li><a href="#">Australian Nursing Agency currently require experiences</a></li>
                    <li><a href="#">Russia Nursing Agency currently require experiences</a></li>
                    <li><a href="#">The Scientific Publishing Services in Saudi Arbia</a></li>
                    <li><a href="#">BPO Private Limited in Canada</a></li>
                    <li><a href="#">Executive Tracks Associates in Pakistan</a></li>
                    <li><a href="#">Pyramid IT Consulting Pvt. Ltd. in Pakistan</a></li>
                </ul>
            </div>
            <div class="col_3">
                <h3>Jobs by Category</h3>
                <ul class="list_2">
                    <li><a href="#">Railway Recruitment</a></li>
                    <li><a href="#">Air Force Jobs</a></li>
                    <li><a href="#">Police Jobs</a></li>
                    <li><a href="#">Intelligence Bureau Jobs</a></li>
                    <li><a href="#">Army Jobs</a></li>
                    <li><a href="#">Navy Jobs</a></li>
                    <li><a href="#">BSNL Jobs</a></li>
                    <li><a href="#">Software Jobs</a></li>
                    <li><a href="#">Research Jobs</a></li>
                </ul>
            </div>
            <div class="widget">
                <h3>Take The Seeking Poll!</h3>
                <div class="widget-content">
                    <div class="seeking-answer">
			    	<span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
                            <span class="seeking-answer-span">Frequently</span>
                        </label>
		    		</span>
			    	<span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
                            <span class="seeking-answer-span">Interviewing</span>
                        </label>
		    		</span>
			        <span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
                            <span class="seeking-answer-span">Leaving a familiar workplace</span>
                        </label>
		    		</span>
                        <div class="seeking_vote">
                            <a class="seeking-vote-button">Vote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 single_right">
            <div class="login-form-section">
                <div class="login-content">
                    <form>
                        <div class="section-title">
                            <h3>LogIn to your Account</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                <input type="text" required="required" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                <input type="password" required="required" class="form-control " placeholder="Password">
                            </div>
                        </div>
                    </form>
                    <div class="forgot">
                        <div class="login-check">
                            <label class="checkbox1"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
                        </div>
                        <div class="login-para">
                            <p><a href="#"> Forgot Password? </a></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="login-btn">
                        <input type="submit" value="Log in">
                    </div>
                    <div class="login-bottom">
                        <p>With your social media account</p>
                        <div class="social-icons">
                            <div class="button">
                                <?php  echo yii\authclient\widgets\AuthChoice::widget(['baseAuthUrl' => ['site/auth']]); ?>

                                <a class="tw twitter auth-link" href="/site/auth?authclient=twitter" title="Twitter">
                                    <i class="fa fa-twitter tw2"> </i><span>Twitter</span>
                                    <div class="clearfix"> </div></a>
                                <a class="fa facebook auth-link" href="/site/auth?authclient=facebook" title="Facebook" data-popup-width="860" data-popup-height="480"
                                    <i class="fa fa-facebook tw2"> </i><span>Facebook</span>
                                    <div class="clearfix"> </div></a>
                                <a class="go google auth-link" href="/site/auth?authclient=google" title="Google">
                                    <i class="fa fa-google-plus tw2"> </i><span>Google+</span>
                                    <div class="clearfix"> </div></a>
                                <div class="clearfix"> </div>
                            </div>
                            <h4>Don't have an Account ? <a href="register.html"> Register Now!</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>