<?php
use app\components\tona\Helper;
use app\components\SiteWidget;
use \yii\helpers\Html;
?>

<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= \app\components\tona\Helper::siteURL() ?>"><img src="/web/images/logo2.png" height="58px" alt="vina-jobs.com"/></a>
		</div>
		<!--/.navbar-header-->
		<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="location.html">Contract Jobs</a></li>
						<li><a href="location.html">Walkin Jobs</a></li>
						<li><a href="location.html">Jobs by Location</a></li>
						<li><a href="location.html">Jobs by Function</a></li>
						<li><a href="location.html">Jobs by Industry</a></li>
						<li><a href="location.html">Jobs by Company</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
					<ul class="dropdown-menu multi-column columns-3">
						<div class="row">
							<div class="col-sm-4">
								<ul class="multi-column-dropdown">
									<li><a href="services.html">Action</a></li>
									<li><a href="services.html">Another action</a></li>
									<li><a href="services.html">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="services.html">Separated link</a></li>
									<li class="divider"></li>
									<li><a href="services.html">One more separated link</a></li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul class="multi-column-dropdown">
									<li><a href="services.html">Action</a></li>
									<li><a href="services.html">Another action</a></li>
									<li><a href="services.html">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="services.html">Separated link</a></li>
									<li class="divider"></li>
									<li><a href="services.html">One more separated link</a></li>
								</ul>
							</div>
							<div class="col-sm-4">
								<ul class="multi-column-dropdown">
									<li><a href="services.html">Action</a></li>
									<li><a href="services.html">Another action</a></li>
									<li><a href="services.html">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="services.html">Separated link</a></li>
									<li class="divider"></li>
									<li><a href="services.html">One more separated link</a></li>
								</ul>
							</div>
						</div>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiters<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="login.html">Recruiter Updates</a></li>
						<li><a href="recruiters.html">Recruiters you are following</a></li>
						<li><a href="codes.html">Shortcodes</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="jobs.html">Walk-ins</a></li>
						<li><a href="jobs.html">Bpo Jobs</a></li>
						<li><a href="jobs.html">Teaching Jobs</a></li>
						<li><a href="jobs.html">Diploma Jobs</a></li>
						<li><a href="jobs.html">Tech Support</a></li>
						<li><a href="jobs.html">Finance Jobs</a></li>
						<li><a href="jobs.html">Part time Jobs</a></li>
						<li><a href="jobs.html">Health Care</a></li>
						<li><a href="jobs.html">Hospitality</a></li>
						<li><a href="jobs.html">Internships</a></li>
						<li><a href="jobs.html">Research Jobs</a></li>
						<li><a href="jobs.html">Defence Jobs</a></li>
					</ul>
				</li>
				<?php if(\app\components\tona\Common::isLogin()){ ?>
					<li><a href="/logout.html" mothod="post">Logout</a></li>
				<?php }else{ ?>
					<li><a href="login.html">Login</a></li>
				<?php } ?>
				<li><a href="resume.html">Upload Resume</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--/.navbar-collapse-->
</nav>
