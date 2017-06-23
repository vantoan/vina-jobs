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
		    			   <input class="seeking-radiobutton icheck" name="survey" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
                            <span class="seeking-answer-span">Frequently</span>
                        </label>
		    		</span>
			    	<span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton icheck" name="survey" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
                            <span class="seeking-answer-span">Interviewing</span>
                        </label>
		    		</span>
			        <span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton icheck" name="survey" type="radio">
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
            <div class="but_list">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Top Locations</a></li>
                        <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Show Descriptions</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html">IT Recruiter </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html">who are so </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html">Icorrupti quos </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html">therefore always </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html">you need to be </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="#">praising pain </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="#"> blame belongs  </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html">IT Recruiter </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html"> right to find </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html">dolor repellendus </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html"> These cases </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html">equal blame  </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html">IT Recruiter </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html">distracted by </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html"> totam rem  </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html"> complete account </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html">must explain </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="tab_grid">
                                <div class="col-sm-3 loc_1">
                                    <a href="location_single.html"><img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRlZmNkYWRhYjQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGVmY2RhZGFiNCI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="height: 140px; width: 100%; display: block;"></a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="location_box1">
                                        <h6><a href="location_single.html">IT Recruiter </a><span class="m_1">Posted 5 hours ago</span></h6>
                                        <p><span class="m_2">Location : </span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
                                        <ul class="links_bottom">
                                            <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li>
                                            <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
                                            <li class="last"><a href="location_single.html"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>