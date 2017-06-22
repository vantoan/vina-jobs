<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<!-- Modal -->
<div class="modal fade" id="modal-select-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-md-12">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">ĐĂNG KÝ TÀI KHOẢN NHƯ LÀ</h4></div>
			</div>
			<div class="modal-body clearfix">
				<div class="col-xs-6"><button class="btn btn-primary col-xs-12 select-form" value="0">NGƯỜI TÌM VIỆC</button></div>
				<div class="col-xs-6"><button class="btn btn-primary col-xs-12 select-form" value="1">NHÀ TUYỂN DỤNG</button></div>
			</div>
			<div class="modal-footer">
				<div class="col-md-12">
					Hoặc <button type="button" class="btn btn-default login-form" data-dismiss="modal">đăng nhập</button> nếu bạn đã có tài khoản !
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content clearfix">
			<div class="modal-header">
				<div class="col-lg-12">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2><p><a href="#"><i class="glyphicon glyphicon-globe"></i></a> ĐĂNG KÝ NGUỜI TÌM VIỆC</p></h2>
				</div>
				<?php $form = ActiveForm::begin([
					'action' => 'users/register',
					'method' => 'post',
					'id' => 'signup-form',
					'options' => ['class' => 'form-horizontal'],
					'fieldConfig' => [
						'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
						'labelOptions' => ['class' => 'col-lg-12'],
					],
				]); ?>
					<div class="col-xs-12 error"></div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-6 col-md-6">
							<?= $form->field($model, 'first_name')->textInput(['autofocus' => true, 'placeholder' => 'First name'])->label(false) ?>
						</div>
						<div class="col-xs-6 col-md-6">
							<?= $form->field($model, 'last_name')->textInput(['placeholder' => 'Last name'])->label(false) ?>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<?= $form->field($model, 'email')->textInput(['placeholder' => 'Your email'])->label(false) ?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6 col-md-6">
							<?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label(false) ?>
						</div>
						<div class="col-xs-6 col-md-6">
							<?= $form->field($model, 'repeat_password')->passwordInput(['placeholder' => 'Repeat password'])->label(false) ?>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4 col-md-4">
							<?= $form->field($model, 'birthday')->textInput(['placeholder' => 'Birthday', 'class' => 'form-control datepicker-birthday'])->label(false) ?>
						</div>
						<div class="col-xs-4 col-md-4">
							<?= $form->field($model, 'phone')->textInput(['placeholder' => 'Phone number'])->label(false) ?>
						</div>
						<div class="col-xs-4 col-md-4">
							<?= $form->field($model, 'gender')->inline()->radioList([1 => 'Male', 0 => 'Female'])->label(false) ?>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<button data-ajax="submit-form" class="btn btn-lg btn-primary has-spinner" data-loading-text="<i class='fa fa-spinner fa-spin'">
								<span class="spinner"><i class="icon-spin icon-refresh"></i></span> Sign up</button>
						</div>
					</div>
				</div>
				<?php ActiveForm::end(); ?>
			</div>
			<div class="col-md-12 text-right">
				<div class="col-xs-1 pull-right">
					<p><a href="#" data-dismiss="modal" class="login-form"><i class="fa fa-sign-in" aria-hidden="true"></i></a></p>
				</div>
				<div class="col-xs-1  pull-right">
					<p><a href="#" data-dismiss="modal" class="open-form-company"><i class="fa fa-exchange" aria-hidden="true"></i></a></p>
				</div>
			</div>
		</div>
	</div>
</div>

