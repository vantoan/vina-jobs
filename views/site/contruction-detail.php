<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\components\tona\Cons;
use app\components\tona\Helper;
use app\components\SidebarWidget;

$page = \app\components\PageWidget::page('contruction-detail');
$this->title = $article['name'];
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
			<?= $page->content ?>

			<?php
			$col = ($page->pape_template == Cons::PAGE_TEMPLATE_FULL) ? 3 : 4;
			?>

			<div class="row">
				<div class="col-md-12 content-img">
					<p>
						<img src="<?= Helper::thumbnail(\app\models\CacheImg::OBJECT_TYPE_ARTICLE_DETAIL, $article['id'], $article['image'], 740, 350) ?>" alt="">
					</p>

				<?= $article['content'] ?>
				</div>
			</div>
		</div>

		<?php
		if ($page->pape_template == Cons::PAGE_TEMPLATE_SIDEBAR_RIGHT) {
			echo SidebarWidget::widget();
		}
		?>
	</div>
</div>