<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\components\tona\Cons;
use app\components\tona\Helper;
use app\components\SidebarWidget;

$page = \app\components\PageWidget::page('tu-van');
$this->title = $page->name;
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="<?= Helper::siteURL() ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active"><?= Html::encode($this->title) ?></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<h1><?= $this->title ?></h1>

	<div class="row">
		<?php
		if ($page->pape_template == Cons::PAGE_TEMPLATE_SIDEBAR_LEFT) {
			echo SidebarWidget::widget();
		}
		?>
		<?php
		if ($page->pape_template == Cons::PAGE_TEMPLATE_FULL) {
			$cssClass = 'col-lg-12';
		} else {
			$cssClass = 'col-lg-8';
		}
		?>
		<div class="<?= $cssClass ?>">
			<?php
			//echo $page->content;
			$slug = 'tu-van';
			$id = \app\models\NewsCategory::find()->where(['slug' => $slug])->one();
			$listQs = \app\models\NewsCategory::find()->where(['parent_id' => $id->id])->all();
			?>
			<div class="row" id="consulting" data-url="<?= \yii\helpers\Url::to('/site/load-consulting'); ?>">
				<ul class="nav nav-pills nav-stacked col-md-3" style="margin-left: 0">
					<?php
					if($listQs){
						foreach($listQs as $k => $v){
							if($k == 0){
								echo '<li class="active"><a href="#tab_a" data-toggle="pill" data-id="'.$v->id.'">'.($k + 1).') '.$v->name.'</a></li>';
							}else{
								echo '<li><a href="#tab_a" data-toggle="pill" data-id="'.$v->id.'">'.($k + 1).') '.$v->name.'</a></li>';
							}
						}
					}
					?>
				</ul>
				<div class="tab-content col-md-9">
					<div class="tab-pane active" id="tab_a">
						<img src="<?= Helper::siteURL()?>/web/images/ajax-loader-s.gif">
					</div>
				</div><!-- tab content -->
			</div>
		</div>

		<?php
		if ($page->pape_template == Cons::PAGE_TEMPLATE_SIDEBAR_RIGHT) {
			echo SidebarWidget::widget();
		}
		?>
	</div>
</div>