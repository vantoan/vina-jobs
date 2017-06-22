<?php

use yii\helpers\Html;
use \yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = 'Theme';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<a href="<?= Url::to('/admin/theme/update') ?>" class="btn btn-primary">Footers</a>
			</div>
		</div>
	</div>
</div>
