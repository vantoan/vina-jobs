<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="loginmodal-container">
			<?php $form = ActiveForm::begin([
				'action' => '/admin/login/login'
			]); ?>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h1>ĐĂNG NHẬP</h1><br>
				<div class="col-xs-12 col-md-12 text-center">
					<?= yii\authclient\widgets\AuthChoice::widget([
						'baseAuthUrl' => ['users/auth'],
						'popupMode' => false,
					]) ?>
				</div>
				<div class="col-col-12 text-center">
					<p>Hoặc</p>
				</div>
				<div class="error"></div>

				<?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Username or email'])->label(false) ?>
				<?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Your password'])->label(false) ?>

				<input type="submit" name="login" class="login btn btn-primary loginmodal-submit" value="Login">

				<div class="login-help">
					<p><a href="#" class="signup-select-modal" data-dismiss="modal">Hoặc đăng ký nếu chưa có tài khoản.</a></p>
					<p><a href="#">Bạn quên mật khẩu ?</a></p>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>