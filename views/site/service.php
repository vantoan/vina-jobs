<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\components\tona\Cons;
use app\components\tona\Helper;
use app\components\SidebarWidget;

$page = \app\components\PageWidget::page('dich-vu');
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

			<div class="row">
				<div class="col-md-12">
					<h2><?= $detail['name'] ?></h2>
					<div class="content">
						<?= $detail['content'] ?>
					</div>
				</div>
			</div><!--/row-->
		</div>

		<?php
		if ($page->pape_template == Cons::PAGE_TEMPLATE_SIDEBAR_RIGHT) {
			echo SidebarWidget::widget();
		}
		?>
	</div>
</div>