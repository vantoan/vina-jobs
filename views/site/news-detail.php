<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\components\tona\Cons;
use app\components\tona\Helper;
use app\components\SidebarWidget;

$page = \app\components\PageWidget::page('tin-tuc-detail');
$this->title = $detail['name'];
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
						<p><img src="<?= Helper::thumbnail(\app\models\CacheImg::OBJECT_TYPE_NEWS_DETAIL, $detail['id'], $detail['image'], 200, 250) ?> " class="pull-left" alt="<?= $detail['name'] ?>" /></p>
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