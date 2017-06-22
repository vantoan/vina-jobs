<?php
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
?>
<div class="container <?= Yii::$app->controller->id ?>">
	<div class="row">
		<div
			class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 text-right toppad">
			<p class=" text-info"><?= \app\components\tona\Date::getDateNow() ?> | <a href="edit.html">Thoát</a></p>
		</div>
		<div
			class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 toppad">

			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><?= \app\components\tona\Common::currentUser('name') ?></h3>
				</div>
				<div class="panel-body">
					<?php $form = ActiveForm::begin([
						'method' => 'post',
						'id' => 'resume-form',
						'options' => ['class' => 'form-recruitment', "enctype" =>"multipart/form-data"],
						'fieldConfig' => [
							'template' => "{label}\n{input}\n<div class='error'>{error}</div>",
							'labelOptions' => ['class' => ''],
						],
					]); ?>
					<div class="row">
						<div class="col-md-3 col-lg-3 " align="center">
							<img alt="User Pic"
							     src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png"
							     class="img-circle img-responsive"></div>

						<div class=" col-md-9 col-lg-9 ">
							<div class="row">
								<div class="col-md-6">
									<?php
									echo $form->field($model, 'first_name')->textInput(['autofocus' => true, 'placeholder' => 'Họ và tên đệm','readonly' => false]);
									?>
								</div>
								<div class="col-md-6">
									<?php
									echo $form->field($model, 'last_name')->textInput(['placeholder' => 'Tên','readonly' => false]);
									?>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<?php
									echo $form->field($model, 'email')->textInput(['placeholder' => 'Email','readonly' => true]);
									?>
								</div>
								<div class="col-md-6">
									<?php
									echo $form->field($model, 'phone')->textInput(['placeholder' => 'Số điện thoại','readonly' => false]);
									?>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<?php
									echo $form->field($model, 'birthday')->textInput(['placeholder' => 'Ngày sinh', 'class' => 'form-control datepicker-birthday']);
									?>
								</div>
								<div class="col-md-6">
									<?= $form->field($model, 'gender')->inline()->radioList([1 => 'Nam', 0 => 'Nữ']) ?>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<?php
									echo $form->field($model, 'address')->textInput(['placeholder' => 'Địa chỉ']);
									?>
								</div>
								<div class="col-md-6">
									<?php
									$city = \app\models\Locations::find()->all();
									$city = ArrayHelper::map($city,'int','name');
									echo $form->field($model, 'city')->dropDownList($city,[
										'prompt' => '- Chọn - ',
										'class' => 'select2 form-control'
									]);
									?>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<?php
									$timezone = \app\models\TimeZone::find()->all();
									$timezone = ArrayHelper::map($timezone,'id','name');
									echo $form->field($model, 'timezone')->dropDownList($timezone,[
										'prompt' => '- Chọn - ',
										'class' => 'select2 form-control'
									]);
									?>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<?php
									echo $form->field($model, 'description')->textarea(['placeholder' => 'Đôi nét về bản thân']);
									?>
								</div>
							</div>

							<button type="submit" class="btn btn-primary">Lưu thay đổi</button>
						</div>


					</div>
					<?php ActiveForm::end(); ?>
				</div>
				<div class="panel-footer">
					<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button"
					   class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="<?= \yii\helpers\Url::to('/' . $user->username . '/profile/update.html') ?>"
                               data-original-title="Edit this user" data-toggle="tooltip" type="button"
                               class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button"
                               class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
				</div>

			</div>
		</div>
	</div>
</div>