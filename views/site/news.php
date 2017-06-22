<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\components\tona\Cons;
use app\components\tona\Helper;
use app\components\SidebarWidget;

$page = \app\components\PageWidget::page('tin-tuc');
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

			<div class="row">
				<?php
				if($news){
				foreach($news as $key => $value){
				?>
				<div class="col-xs-18 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="<?= Helper::thumbnail(\app\models\CacheImg::OBJECT_TYPE_NEWS_LIST, $value['id'], $value['image'], 260, 150) ?> " class="pull-left" alt="<?= $value['name'] ?>" />
						<div class="caption">
							<h4><?= $value['name'] ?></h4>
							<p><?= $value['description'] ?></p>
							<?php if(\app\components\tona\Role::allowAdmin()){ ?>
							<a href="#" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-edit"></i></a>
							<?php } ?>
							<a href="<?= \yii\helpers\Url::to('tin-tuc/'. $value['slug'].'.html') ?>" class="btn btn-info btn-xs" role="button">Xem</a>
<!--							<a href="#" class="btn btn-default btn-xs" role="button">Button</a>-->
						</div>
					</div>
				</div>
					<?php
				}
				}else{
					?>
					<li>
						<h6>No data.</h6>
					</li>
					<?php
				}
				?>
			</div><!--/row-->
		</div>

		<?php
		if ($page->pape_template == Cons::PAGE_TEMPLATE_SIDEBAR_RIGHT) {
			echo SidebarWidget::widget();
		}
		?>
	</div>
</div>