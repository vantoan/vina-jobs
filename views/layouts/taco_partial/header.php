<?php
use app\components\tona\Helper;
use app\components\SiteWidget;
use \yii\helpers\Html;
?>
<div class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= Helper::siteURL() ?>"><img src="<?= SiteWidget::site('logo'); ?>" height="90"></a>
		</div>

		<div class="navbar-collapse collapse ">
			<ul class="nav navbar-nav">
				<li class="<?= Helper::checkActiveMenu('site/index') ?>"><a href="<?= Helper::siteURL() ?>">Trang chủ</a></li>
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Typography</a></li>
						<li><a href="#">Components</a></li>
						<li><a href="#">Pricing box</a></li>
					</ul>
				</li>-->
				<li class="<?= Helper::checkActiveMenu('site/introduction') ?>"><?= Html::a('Giới thiệu', '/gioi-thieu.html') ?></li>
				<li class="<?= Helper::checkActiveMenu('site/contruction') ?>"><?= Html::a('Công trình', '/cong-trinh.html') ?></li>
				<li class="<?= Helper::checkActiveMenu('site/quotation') ?>"><?= Html::a('Báo giá', '/bao-gia.html') ?></li>
				<li class="<?= Helper::checkActiveMenu('site/consulting') ?>"><?= Html::a('Tư vấn', '/tu-van.html') ?></li>
				<li class="<?= Helper::checkActiveMenu('site/news') ?>"><?= Html::a('Tin tức', '/tin-tuc.html') ?></li>
				<li class="<?= Helper::checkActiveMenu('site/contact') ?>"><?= Html::a('Liên hệ', '/lien-he.html') ?></li>
			</ul>
		</div>
	</div>
</div>