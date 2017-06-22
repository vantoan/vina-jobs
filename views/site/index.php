<?php

use app\components\tona\Helper;
use app\components\SiteWidget;
use app\components\CarouselWidget;
use \app\models\CacheImg;
use app\components\tona\Cons;
/* @var $this yii\web\View */

$page = \app\components\PageWidget::page('home');
$this->title = $page->seo_title ? $page->seo_title : $page->name;
Helper::setSeo('description', $page->seo_description ? $page->seo_description : '');
?>

<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Slider -->
				<div id="main-slider" class="flexslider">
					<?= CarouselWidget::widget() ?>
				</div>
				<!-- end slider -->
			</div>
		</div>
	</div>
</section>

<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><?= SiteWidget::site('com_name')?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row services">
					<?php if($services){
					foreach($services as $service){
					?>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="box">
							<div class="box-icon">
								<img src="<?= Helper::thumbnail(CacheImg::OBJECT_TYPE_ARTICLE_THUM, $service['id'], $service['image'], 100, 100) ?>">
							</div>
							<div class="info">
								<h4 class="text-center"><?= $service['name'] ?></h4>
								<p><?= $service['description'] ?></p>
								<a href="<?= Helper::urlTo('dich-vu', $service['slug']) ?>" class="btn">Xem</a>
							</div>
						</div>
					</div>
					<?php } }?>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Các dự án</h4>
				<div class="row">
					<section id="projects">
						<ul id="thumbs" class="portfolio">
							<!-- Item Project and Filter Name -->
							<?php if($projects){
							foreach($projects as $key => $project){
							?>
							<li class="col-lg-3 design" data-id="id-<?= $key ?>" data-type="web">
								<div class="item-thumbs">
									<!-- Fancybox - Gallery Enabled - Title - Full Image -->
									<a class="hover-wrap" title="Xem chi tiết" href="<?= Helper::urlTo('cong-trinh', $project['slug']) ?>">
										<span class="overlay-img"></span>
										<span class="overlay-img-thumb font-icon-plus"></span>
									</a>
									<!-- Thumb Image and Description -->
									<img src="<?= Helper::thumbnail(\app\models\CacheImg::OBJECT_TYPE_PROJECT_THUM_INDEX, $project['id'], $project['image'], 260, 205) ?>" alt="">
								</div>
							</li>
							<?php } }?>
							<!-- End Item Project -->
						</ul>
					</section>
				</div>
			</div>
		</div>

	</div>
</section>
