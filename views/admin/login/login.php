<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div>
	<a class="hiddenanchor" id="signup"></a>
	<a class="hiddenanchor" id="signin"></a>

	<div class="login_wrapper">
		<div class="animate form login_form">
			<section class="login_content">
				<?php $form = ActiveForm::begin(); ?>
					<h1>Login Form</h1>
					<div>
						<?= $form->field($model, 'username')->textInput(['autofocus' => true])->label(false) ?>
					</div>
					<div>
						<?= $form->field($model, 'password')->passwordInput()->label(false) ?>
					</div>
					<div>
						<?= Html::submitButton('Log in', ['class' => 'btn btn-default submit', 'name' => 'login-button']) ?>
						<a class="reset_pass" href="#">Lost your password?</a>
					</div>

					<div class="clearfix"></div>

					<div class="separator">
						<p class="change_link">New to site?
							<a href="#signup" class="to_register"> Create Account </a>
						</p>

						<div class="clearfix"></div>
						<br />

						<div>
							<h1><img src="/web/images/logo1.png" alt="Tona Nguyen" height="35"> Tona Nguyen</h1>
							<p>©2016 All Rights Reserved.</p>
						</div>
					</div>
				<?php ActiveForm::end(); ?>
			</section>
		</div>

		<div id="register" class="animate form registration_form">
			<section class="login_content">
				<?php $formCreate = ActiveForm::begin(['action' => '/admin/login/create']); ?>
					<h1>Create Account</h1>
					<div>
						<?= $formCreate->field($model_new, 'username')->textInput()->label(false) ?>
					</div>
					<div>
						<?= $formCreate->field($model_new, 'email')->textInput(['autofocus' => true])->label(false) ?>
					</div>
					<div>
						<?= $formCreate->field($model_new, 'password')->textInput(['autofocus' => true])->label(false) ?>
					</div>
					<div>
						<button type="submit" class="btn btn-default submit">Submit</button>
					</div>

					<div class="clearfix"></div>

					<div class="separator">
						<p class="change_link">Already a member ?
							<a href="#signin" class="to_register"> Log in </a>
						</p>

						<div class="clearfix"></div>
						<br />

						<div>
							<h1><img src="/web/images/logo2.png" alt="Tona Nguyen" height="35"> Tona Nguyen</h1>
							<p>©2016 All Rights Reserved.</p>
						</div>
					</div>
				<?php $form = ActiveForm::begin(); ?>
			</section>
		</div>
	</div>
</div>