<?php
use \yii\bootstrap\ActiveForm;
use app\components\tona\Common;
use app\components\tona\Helper;

$readOnly = false;
if(\app\components\tona\Login::checked()){
	$readOnly = true;
}
?>
<div class="container recruitment form-default">
	<div class="col-lg-12 top-title text-center wow zoomIn">
		<h1>POST A RESUME</h1>
		<p>FIND YOUR PERFECT JOB</p>
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
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
	</div>
</div>