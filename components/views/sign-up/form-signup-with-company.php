<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="modal fade" id="signup-modal-company" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content clearfix">
			<div class="col-xs-12 col-sm-12 col-md-12 well well-sm">
				<div class="col-lg-12">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2><p><a href="#"><i class="glyphicon glyphicon-globe"></i></a> ĐĂNG KÝ NHÀ TUYỂN DỤNG</p></h2>
				</div>
				<?php $form = ActiveForm::begin([
					'action' => 'users/register-company',
					'method' => 'post',
					'id' => 'signup-form-company',
					'options' => ['class' => 'form-horizontal'],
					'fieldConfig' => [
						'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
						'labelOptions' => ['class' => 'col-lg-12'],
					],
				]); ?>

				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 error"></div>
					</div>
					<div class="row">
						<div class="col-xs-7">
							<p>Thông tin người liên hệ</p>
							<div class="row">
								<div class="col-xs-6 col-md-6">
									<?= $form->field($model, 'first_name')->textInput(['autofocus' => true, 'placeholder' => 'Họ'])->label(false) ?>
								</div>
								<div class="col-xs-6 col-md-6">
									<?= $form->field($model, 'last_name')->textInput(['placeholder' => 'Chữ lót và tên'])->label(false) ?>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<?= $form->field($model, 'email')->textInput(['placeholder' => 'Địa chỉ email'])->label(false) ?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-md-6">
									<?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Mật khẩu'])->label(false) ?>
								</div>
								<div class="col-xs-6 col-md-6">
									<?= $form->field($model, 'repeat_password')->passwordInput(['placeholder' => 'Nhập lại mật khẩu'])->label(false) ?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-md-4">
									<?= $form->field($model, 'birthday')->textInput(['placeholder' => 'Ngày sinh', 'class' => 'form-control datepicker-birthday'])->label(false) ?>
								</div>
								<div class="col-xs-4 col-md-4">
									<?= $form->field($model, 'phone')->textInput(['placeholder' => 'Số điện thoại liên hệ'])->label(false) ?>
								</div>
								<div class="col-xs-4 col-md-4">
									<?= $form->field($model, 'gender')->inline()->radioList([1 => 'Nam', 0 => 'Nữ'])->label(false) ?>
								</div>
							</div>
						</div>

						<div class="col-xs-5 info-company" style="border-left: 2px solid #00a7e2">
							<p>Thông tin công ty</p>
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<?= $form->field($model, 'com_name')->textInput(['placeholder' => 'Tên công ty', 'class' => 'form-control'])->label(false) ?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<?= $form->field($model, 'com_address')->textInput(['placeholder' => 'Địa chỉ công ty', 'class' => 'form-control'])->label(false) ?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<?= $form->field($model, 'com_phone')->textInput(['placeholder' => 'Điện thoại công ty', 'class' => 'form-control'])->label(false) ?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<?= $form->field($model, 'com_website')->textInput(['placeholder' => 'Website', 'class' => 'form-control'])->label(false) ?>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 text-center">
							<button class="btn btn-lg btn-primary" data-ajax="submit-form" data-loading-text="<i class='fa fa-spinner fa-spin'">
							<span class="spinner"><i class="icon-spin icon-refresh"></i></span> Đăng ký</button>
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
					<p><a href="#" data-dismiss="modal" class="open-form-register"><i class="fa fa-exchange" aria-hidden="true"></i></a></p>
				</div>
			</div>
		</div>
	</div>
</div>