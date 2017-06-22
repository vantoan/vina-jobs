<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Change password';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-changepassword">
	<h1><?= Html::encode($this->title) ?></h1>

	<p>Please fill out the following fields to change password:</p>

	<?php $form = ActiveForm::begin([
		'id'=>'changepassword-form',
		'options'=>['class'=>'form-horizontal'],
		'fieldConfig'=>[

		],
	]); ?>
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<?= $form->field($model,'oldpass',['inputOptions'=>[
				'placeholder'=>'Current password'
			]])->passwordInput() ?>

			<?= $form->field($model,'newpass',['inputOptions'=>[
				'placeholder'=>'New password'
			]])->passwordInput() ?>

			<?= $form->field($model,'repeatnewpass',['inputOptions'=>[
				'placeholder'=>'Repeat new password'
			]])->passwordInput() ?>

			<div class="form-group">
				<?= Html::submitButton('Change password',[
					'class'=>'btn btn-primary'
				]) ?>
			</div>
		</div>
	</div>
	<?php ActiveForm::end(); ?>
</div>