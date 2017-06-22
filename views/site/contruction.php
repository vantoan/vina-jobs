<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\components\tona\Cons;
use app\components\tona\Helper;
use app\components\SidebarWidget;

$page = \app\components\PageWidget::page('cong-trinh');
$this->title = $page->name;
$this->params['breadcrumbs'][] = $this->title;
Helper::setSeo('description', $page->seo_description ? $page->seo_description : '');
Helper::setSeo('keyword', $page->seo_keyword ? $page->seo_keyword : '');
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
			<?= $page->content ?>

			<?php
			$col = ($page->pape_template == Cons::PAGE_TEMPLATE_FULL) ? 3 : 4;
			?>

			<div class="row">
				<?php
				if($project){
				foreach($project as $key => $value){
				?>
				<div class="col-xs-6 col-sm-4 col-md-3">
					<div class="thumbnail">
						<img src="<?= Helper::thumbnail(\app\models\CacheImg::OBJECT_TYPE_PROJECT_THUM, $value['id'], $value['image'], 260, 171) ?>">
						<div class="caption">
							<h3><?= $value['name'] ?></h3>
							<p class="card-description"><?=$value['description'] ?></p>
							<p><a href="<?= \yii\helpers\Url::to('/cong-trinh/'.$value['slug'].'.html') ?>" class="btn btn-primary" role="button">Xem</a></p>
						</div>
					</div>
				</div>
					<?php
				}
				}else{
					?>
						<div class="col-md-12">No data.</div>
				<?php } ?>

			</div>
		</div>

		<?php
		if ($page->pape_template == Cons::PAGE_TEMPLATE_SIDEBAR_RIGHT) {
			echo SidebarWidget::widget();
		}
		?>
	</div>
</div>