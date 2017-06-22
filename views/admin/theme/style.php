<?php

use yii\helpers\Html;
use \app\components\tona\Role;
use \app\components\tona\Helper;
use \app\components\tona\Common;
use \yii\helpers\Url;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = 'Theme';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="">

	<h1><?= Html::encode($this->title) ?></h1>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php $form = ActiveForm::begin(); ?>
					<div class="form-group">
						<textarea name="file_content" class="form-control bg-editor" rows="25" id="comment" spellcheck="false"><?= $file_content ?></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
					<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>
</div>
