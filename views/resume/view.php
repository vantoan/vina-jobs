<?php
use \yii\bootstrap\ActiveForm;
use app\components\tona\Common;
use app\components\tona\Helper;

$readOnly = false;
if(\app\components\tona\Login::checked()){
	$readOnly = true;
}
?>
<div class="container recruitment review form-default">
	<div class="col-lg-12 top-title text-center wow zoomIn">
		<h1>ANDY SPENCER</h1>
		<p>SENIOR WEB DESIGNER</p>
	</div>

	<?php if(!\app\components\tona\Login::checked()){ ?>
		<div class="col-lg-12">
			<div class="alert alert-warning text-center">
				<p>
					HAVE AN ACCOUNT?
					<br>
					If you don't have an account you can create one below by entering your email address/username.
					A password will be automatically emailed to you.
				</p>
			</div>
		</div>
	<?php } ?>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-sm-8 wow fadeInUp">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="title">
							<?php
							$user = \app\models\Users::findOne($model->user_id);
							echo strtoupper($user->name);
							?>
						</h2>
					</div>
				</div>

				<div class="wow fadeInUp clearfix">
					<div class="img-zone">
						<img src="https://jobboardwordpress.com/site/images/resume.jpg">
						<p>
							<?= $model->resume_content ?>
						</p>
					</div>
				</div>

				<div class="wow fadeInUp">
					<h3>KỸ NĂNG</h3>
					<div class="skill-zone">
						<?= $model->skill ?>
					</div>
				</div>

				<div class="wow fadeInUp">
					<h3>KINH NGHIỆM LÀM VIỆC</h3>
					<div class="experience-zone">
						<?php
						$exp = json_decode($model->experience);
						if($exp){
							foreach($exp as $value){
								?>
								<div class="row work-experience">
									<div class="col-sm-2">
										<div class="img-circle">
											<i class="fa fa-briefcase"></i>
										</div>
									</div>
									<div class="col-sm-10">
										<h4><?= $value->experience_start_date ?></h4>
										<h5><?= $value->experience_employer ?> - <?= $value->experience_job_title ?></h5>
										<p><?= $value->experience_responsibilities ?></p>
									</div>
								</div>
								<?php
							}
						}else{
							?>
							<div class="row work-experience">
								<div class="col-sm-2">
									<div class="img-circle">
										<i class="fa fa-briefcase"></i>
									</div>
								</div>
								<div class="col-sm-10">
									<h4>&nbsp;</h4>
									<h5>Chưa cập nhật</h5>
								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>

				<div class="wow fadeInUp">
					<h3>GIÁO DỤC</h3>
					<div class="education-zone">
						<?php
						$edu = json_decode($model->education);
						if($edu) {
							foreach ($edu as $value) {
								?>
								<div class="row work-experience">
									<div class="col-sm-2">
										<div class="img-circle">
											<i class="fa fa-graduation-cap"></i>
										</div>
									</div>
									<div class="col-sm-10">
										<h4><?= $value->education_start_date ?></h4>
										<h5><?= $value->education_shool_name ?> - <?= $value->education_qualifications ?></h5>
										<p><?= $value->education_note ?></p>
									</div>
								</div>
							<?php }
						}else { ?>
						<div class="row work-experience">
							<div class="col-sm-2">
								<div class="img-circle">
									<i class="fa fa-graduation-cap"></i>
								</div>
							</div>
							<div class="col-sm-10">
								<h4>&nbsp;</h4>
								<h5>Chưa cập nhật</h5>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>

				<div class="wow fadeInUp">
					<div class="col-lg-12">
						<p><a href="<?= Yii::$app->homeUrl.$model->resume_file ?>" download="CV-"  class="btn btn-primary btn-lg"><i class="fa fa-arrow-down"></i> Tải CV này</a></p>
					</div>
				</div>

				<?php
				if(\app\components\tona\Login::checkOwner($model->created_by)){
					?>
					<div class="row wow fadeInUp">
						<div class="col-lg-12 text-center">
							<?php
							$url = '/' . Helper::createSlug(Yii::$app->user->identity->name) . '/update/' . $model->slug . '.html';
							?>
							<a href="<?= \yii\helpers\Url::to($url)?>"><button class="btn btn-primary review">Cập nhật</button></a>
						</div>
					</div>
				<?php } ?>
			</div>

			<div class="col-sm-4" id="sidebar">
				<div class="sidebar-widget wow fadeInUp" id="share">
					<h2 class="title">SHARE RESUME</h2>
					<ul>
						<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://www.coffeecreamthemes.com/themes/jobseek/site/job-details.html"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/home?status=http://www.coffeecreamthemes.com/themes/jobseek/site/job-details.html"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/share?url=http://www.coffeecreamthemes.com/themes/jobseek/site/job-details.html"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.coffeecreamthemes.com/themes/jobseek/site/job-details.html&amp;title=Jobseek%20-%20Job%20Board%20Responsive%20HTML%20Template&amp;summary=&amp;source="><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<hr>
				<div class="sidebar-widget" id="widget-contact">
					<h2 class="title">CONTACT</h2>
					<ul>
						<li><i class="fa fa-user"></i>Andy Spencer</li>
						<li><i class="fa fa-briefcase"></i>Senior Web Designer</li>
						<li><i class="fa fa-birthday-cake"></i>28/08/1983</li>
						<li><i class="fa fa-map-marker"></i>New York City</li>
						<li><i class="fa fa-phone"></i>01.22.987.8392</li>
						<li><i class="fa fa-envelope"></i><a href="mailto:andy.spencer@yourdomain.com">Send an email</a></li>
					</ul>
				</div>
				<hr>
				<div class="sidebar-widget" id="skills">
					<h2 class="title">KEY SKILLS</h2>
					<?php
					$tags = \app\models\CandidateTags::getTagsByCandidateId($model->id);
					?>
					<?php
					if($tags){
						foreach($tags as $value){
							echo '<a href="#" class="badge">'.$value['slug'].'</a>';
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>