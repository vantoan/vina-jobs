<?php
use \yii\bootstrap\ActiveForm;
use app\components\tona\Common;

$readOnly = false;
if(\app\components\tona\Login::checked()){
	$readOnly = true;
}
?>
<?php $form = ActiveForm::begin([
//	'action' => '/resume/create',
	'method' => 'post',
	'id' => 'resume-form',
	'options' => ['class' => 'form-recruitment', "enctype" =>"multipart/form-data"],
	'fieldConfig' => [
		'template' => "{label}\n{input}\n<div class='error'>{error}</div>",
		'labelOptions' => ['class' => ''],
	],
]); ?>
<?php $model->user_id = Common::currentUser('id') ?>
<?= $form->field($model, 'user_id')->hiddenInput([])->label(false) ?>
	<div class="row wow fadeInUp">
		<div class="col-lg-12">
			<h2 class="title">RESUME DETAILS</h2>
		</div>
	</div>

	<div class="row wow fadeInUp">
		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<?php
				$model->name = Common::currentUser('name');
				?>
				<?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Name','readonly' => $readOnly]) ?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<label>photo (optional)</label>
				<input class="form-control" type="text">
			</div>
		</div>
	</div>

	<div class="row wow fadeInUp">
		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<?= $form->field($model, 'resume_title')->textInput(['placeholder' => '_ _ _']) ?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<?= $form->field($model, 'resume_video')->textInput(['placeholder' => 'https://example.com']) ?>
			</div>
		</div>
	</div>

	<div class="row wow fadeInUp">
		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<?php
				$model->email = Common::currentUser('username');
				?>
				<?= $form->field($model, 'email')->textInput(['placeholder' => 'Email', 'readonly' => $readOnly]) ?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<?php
				$role =  \app\models\JobCategories::find()->where('status = :status', [':status' => 1])->all();
				$listRole = \yii\helpers\ArrayHelper::map($role,'id','name');
				?>
				<?= $form->field($model, 'resume_job_categories')->dropDownList($listRole, [
					'prompt'=>'- Select -',
					'class' => 'select2 form-control'
				]) ?>
			</div>
		</div>
	</div>

	<div class="row wow fadeInUp">
		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<?= $form->field($model, 'resume_content')->textarea(['placeholder' => 'Skill', 'class' => 'form-control tinymce']) ?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<?= $form->field($model, 'resume_skill_content')->textarea(['placeholder' => '- Skill ', 'class' => 'form-control tinymce']) ?>
			</div>
		</div>
	</div>

	<div class="row wow fadeInUp">
		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<?php
				$loca =  \app\models\Locations::find()->where('status = :status', [':status' => 1])->all();
				$loca = \yii\helpers\ArrayHelper::map($loca,'int','name');
				?>
				<?= $form->field($model, 'resume_location')->dropDownList($loca, [
					'prompt'=>'- Select -',
					'class' => 'select2 form-control'
				]) ?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<?= $form->field($model, 'resume_skill')->textInput(['placeholder' => 'Skill', 'class' => 'tag-input form-control']) ?>
			</div>
		</div>
	</div>

<?php
$netWork = \yii\helpers\ArrayHelper::map(\app\components\tona\Dropdown::netWork(),'id','link');
?>
	<div class="row row-network wow fadeInUp border-2px">
		<?php
		$net = json_decode($model->resume_net_work);
		if($net && $model->isNew == false){
			foreach($net as $value){
				?>
				<div class="group-network clearfix">
					<div class="network-item item clearfix">
						<a href="#" class="close right"><i class="fa fa-times" aria-hidden="true"></i></a>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<?php $model->resume_net_work = $value->id ?>
								<?= $form->field($model, 'resume_net_work')->dropDownList($netWork, [
									'prompt'=>'- Select -',
									'class' => 'form-control',
									'name' => 'ResumeForm[resume_net_work][]',
								])
								?>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<?php $model->resume_url = $value->value ?>
								<?= $form->field($model, 'resume_url')->textInput(['name' => 'ResumeForm[resume_url][]', 'placeholder' => 'Url']) ?>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
		}else {
			?>
			<div class="group-network clearfix">
				<div class="network-item item clearfix">
					<a href="#" class="close right"><i class="fa fa-times" aria-hidden="true"></i></a>
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<?php
							$netWork = \yii\helpers\ArrayHelper::map(\app\components\tona\Dropdown::netWork(),'id','link');
							?>
							<?= $form->field($model, 'resume_net_work')->dropDownList($netWork, [
								'prompt'=>'- Select -',
								'class' => 'form-control',
								'name' => 'ResumeForm[resume_net_work][]',
							])
							?>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<?= $form->field($model, 'resume_url')->textInput(['name' => 'ResumeForm[resume_url][]', 'placeholder' => 'Url']) ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

		<div class="col-lg-12 add-more">
			<a href="#"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Thêm</a>
		</div>
	</div>

	<div class="row wow fadeInUp">
		<div class="col-lg-12">
			<h2 class="title">EXPERIENCE</h2>
		</div>
	</div>

	<div class="row row-experience wow fadeInUp border-2px">

		<?php
		$exp = json_decode($model->experience_employer);
		if($exp && $model->isNew == false){
			foreach($exp as $value){
				?>
				<div class="group-experience clearfix">
					<div class="experience-item item clearfix">
						<a href="#" class="close right"><i class="fa fa-times" aria-hidden="true"></i></a>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<?php $model->experience_employer = $value->experience_employer ?>
								<?= $form->field($model, 'experience_employer')->textInput(['name' => 'ResumeForm[experience_employer][]', 'placeholder' => 'Employer']) ?>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<?php $model->experience_start_date = $value->experience_start_date ?>
								<?= $form->field($model, 'experience_start_date')->textInput(['name' => 'ResumeForm[experience_start_date][]', 'placeholder' => 'Start/end date']) ?>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<?php $model->experience_job_title = $value->experience_job_title ?>
								<?= $form->field($model, 'experience_job_title')->textInput(['name' => 'ResumeForm[experience_job_title][]', 'placeholder' => 'Job title']) ?>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<?php $model->experience_responsibilities = $value->experience_responsibilities ?>
								<?= $form->field($model, 'experience_responsibilities')->textInput(['name' => 'ResumeForm[experience_responsibilities][]', 'placeholder' => 'Responsibilities']) ?>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
		}else {
			?>
			<div class="group-experience clearfix">
				<div class="experience-item item clearfix">
					<a href="#" class="close right"><i class="fa fa-times" aria-hidden="true"></i></a>
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<?= $form->field($model, 'experience_employer')->textInput(['name' => 'ResumeForm[experience_employer][]', 'placeholder' => 'Employer']) ?>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<?= $form->field($model, 'experience_start_date')->textInput(['name' => 'ResumeForm[experience_start_date][]', 'placeholder' => 'Start/end date']) ?>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<?= $form->field($model, 'experience_job_title')->textInput(['name' => 'ResumeForm[experience_job_title][]', 'placeholder' => 'Job title']) ?>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<?= $form->field($model, 'experience_responsibilities')->textInput(['name' => 'ResumeForm[experience_responsibilities][]', 'placeholder' => 'Responsibilities']) ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="col-lg-12 add-more">
			<a href="#"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Thêm</a>
		</div>
	</div>


	<div class="row wow fadeInUp">
		<div class="col-lg-12">
			<h2 class="title">EDUCATION</h2>
		</div>
	</div>

	<div class="row row-education wow fadeInUp border-2px">

		<?php
		$edu = json_decode($model->education_shool_name);
		if($edu && $model->isNew == false){
			foreach($edu as $value){
				?>
				<div class="group-education clearfix">
					<div class="education-item item clearfix">
						<a href="#" class="close right"><i class="fa fa-times" aria-hidden="true"></i></a>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<?php $model->education_shool_name = $value->education_shool_name ?>
								<?= $form->field($model, 'education_shool_name')->textInput(['name' => 'ResumeForm[education_shool_name][]', 'placeholder' => 'Net work']) ?>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<?php $model->education_start_date = $value->education_start_date ?>
								<?= $form->field($model, 'education_start_date')->textInput(['name' => 'ResumeForm[education_start_date][]', 'placeholder' => 'Net work']) ?>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<?php $model->education_qualifications = $value->education_qualifications ?>
								<?= $form->field($model, 'education_qualifications')->textInput(['name' => 'ResumeForm[education_qualifications][]', 'placeholder' => 'Net work']) ?>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<?php $model->education_note = $value->education_note ?>
								<?= $form->field($model, 'education_note')->textInput(['name' => 'ResumeForm[education_note][]', 'placeholder' => 'Net work']) ?>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
		}else {
			?>
			<div class="group-education clearfix">
				<div class="education-item item clearfix">
					<a href="#" class="close right"><i class="fa fa-times" aria-hidden="true"></i></a>
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<?= $form->field($model, 'education_shool_name')->textInput(['name' => 'ResumeForm[education_shool_name][]', 'placeholder' => 'Net work']) ?>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<?= $form->field($model, 'education_start_date')->textInput(['name' => 'ResumeForm[education_start_date][]', 'placeholder' => 'Net work']) ?>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<?= $form->field($model, 'education_qualifications')->textInput(['name' => 'ResumeForm[education_qualifications][]', 'placeholder' => 'Net work']) ?>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<?= $form->field($model, 'education_note')->textInput(['name' => 'ResumeForm[education_note][]', 'placeholder' => 'Net work']) ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>


		<div class="col-lg-12 add-more">
			<a href="#"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Thêm</a>
		</div>
	</div>

	<div class="row wow fadeInUp">
		<div class="col-lg-12">
			<h2 class="title">RESUME FILE</h2>
		</div>
	</div>

	<div class="row wow fadeInUp">
		<div class="col-lg-6 col-md-6">
			<div class="form-group">
				<?= $form->field($model, 'file')->fileInput(['class' =>'form-control']) ?>
			</div>
		</div>
	</div>

	<div class="row wow fadeInUp">
		<div class="col-lg-12 text-center">
			<?php
			if($model->isNew){
				?>
				<button class="btn btn-primary review">Review</button>
			<?php }else{ ?>
				<button class="btn btn-primary review">Save</button>
			<?php } ?>
		</div>
	</div>
<?php ActiveForm::end(); ?>