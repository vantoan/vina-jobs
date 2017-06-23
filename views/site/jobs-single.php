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
        <div class="col-md-9 single_right">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            <dl class="experience">
                <div class="experience_content experience_content1">
                    <div class="experience_period">
                        <small>From:</small><br><span>2005</span><br><small>To:</small><br><span>2010</span>
                    </div>
                    <div class="experience_1"><dt><h6>Software Engineer</h6></dt>
                        <dd>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
                        </dd></div>
                </div>
                <div class="experience_content">
                    <div class="experience_period">
                        <small>From:</small><br><span>2011</span><br><small>To:</small><br><span>Present</span></div>
                    <div class="experience_1">
                        <dt><h6>Software Engineer</h6></dt>
                        <dd>
                            <p>Nulla ornare diam vel leo pellentesque, at iaculis sem sagittis. Vestibulum quam ante, convallis ac dignissim vel, venenatis id risus. Quisque posuere sem vitae placerat feugiat.</p>
                        </dd>
                    </div>
                </div>
            </dl>
            <div class="comments">
                <h6>Comments</h6>
                <div class="media media_1">
                    <div class="media-left"><a href="#"> </a></div>
                    <div class="media-body">
                        <h4 class="media-heading"><a class="author" href="#">Sollicitudin</a><a class="reply" href="#">Reply</a><div class="clearfix"> </div></h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="media">
                    <div class="media-left"><a href="#"> </a></div>
                    <div class="media-body">
                        <h4 class="media-heading"><a class="author" href="#">Sollicitudin</a><a class="reply" href="#">Reply</a><div class="clearfix"> </div></h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
            </div>
            <form>
                <div class="to">
                    <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                    <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:3%">
                </div>
                <div class="text">
                    <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                </div>
                <div class="form-submit1">
                    <input name="submit" type="submit" id="submit" value="Submit"><br>
                </div>
                <div class="clearfix"></div>
            </form>
            <div class="candidates-item">
                <h5>Similar Candidates</h5>
                <div class="candidate_1">
                    <div class="thumb"><img src="/web/template/jobs/images/pic8.jpg" class="img-responsive" alt=""/></div>
                    <div class="thumb_desc">
                        <h6 class="title"><a href="#">consectetur</a></h6>
                        <span class="meta">27 Years Old - Sydney, AU</span>
                        <div class="candidate_but">
                            <ul class="top-btns">
                                <li><a href="#" class="btn_5 btn-gray fa fa-plus toggle"></a></li>
                                <li><a href="#" class="btn_5 btn-gray fa fa-star"></a></li>
                                <li><a href="#" class="btn_5 btn-gray fa fa-link"></a></li>
                            </ul>
                        </div>
                        <p class="sm_1">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="candidate_1">
                    <div class="thumb"><img src="/web/template/jobs/images/pic7.jpg" class="img-responsive" alt=""/></div>
                    <div class="thumb_desc">
                        <h6 class="title"><a href="#">consectetur</a></h6>
                        <span class="meta">27 Years Old - Sydney, AU</span>
                        <div class="candidate_but">
                            <ul class="top-btns">
                                <li><a href="#" class="btn_5 btn-gray fa fa-plus toggle"></a></li>
                                <li><a href="#" class="btn_5 btn-gray fa fa-star"></a></li>
                                <li><a href="#" class="btn_5 btn-gray fa fa-link"></a></li>
                            </ul>
                        </div>
                        <p class="sm_1">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="candidate_1">
                    <div class="thumb"><img src="/web/template/jobs/images/pic6.jpg" class="img-responsive" alt=""/></div>
                    <div class="thumb_desc">
                        <h6 class="title"><a href="#">consectetur</a></h6>
                        <span class="meta">27 Years Old - Sydney, AU</span>
                        <div class="candidate_but">
                            <ul class="top-btns">
                                <li><a href="#" class="btn_5 btn-gray fa fa-plus toggle"></a></li>
                                <li><a href="#" class="btn_5 btn-gray fa fa-star"></a></li>
                                <li><a href="#" class="btn_5 btn-gray fa fa-link"></a></li>
                            </ul>
                        </div>
                        <p class="sm_1">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="candidate_2">
                    <div class="thumb"><img src="/web/template/jobs/images/pic5.jpg" class="img-responsive" alt=""/></div>
                    <div class="thumb_desc">
                        <h6 class="title"><a href="#">consectetur</a></h6>
                        <span class="meta">27 Years Old - Sydney, AU</span>
                        <div class="candidate_but">
                            <ul class="top-btns">
                                <li><a href="#" class="btn_5 btn-gray fa fa-plus toggle"></a></li>
                                <li><a href="#" class="btn_5 btn-gray fa fa-star"></a></li>
                                <li><a href="#" class="btn_5 btn-gray fa fa-link"></a></li>
                            </ul>
                        </div>
                        <p class="sm_1">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <img src="/web/template/jobs/images/f11.jpg" class="img-responsive" alt=""/>
            <div class="map_1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
            </div>
            <table class="condidate_detail">
                <h4>Candidate Details</h4>
                <tbody>
                <tr>
                    <td>Name</td>
                    <td>Lorem Ipsum</td>
                </tr>

                <tr>
                    <td>Age</td>
                    <td>35 Years Old</td>
                </tr>

                <tr>
                    <td>Location</td>
                    <td>Australia</td>
                </tr>

                <tr>
                    <td>Experiance</td>
                    <td>10 Years</td>
                </tr>

                <tr>
                    <td>Dgree</td>
                    <td>MCA</td>
                </tr>

                <tr>
                    <td>Career Lavel</td>
                    <td>Mid-Level</td>
                </tr>

                <tr>
                    <td>Phone</td>
                    <td>(800) 2547-879</td>
                </tr>

                <tr>
                    <td>Fax</td>
                    <td>(800) 1247-256</td>
                </tr>

                <tr>
                    <td>E-mail</td>
                    <td><a href="mailto:example@example.com">example@example.com</a></td>
                </tr>

                <tr>
                    <td>Website</td>
                    <td><a href="#">example.com</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>  