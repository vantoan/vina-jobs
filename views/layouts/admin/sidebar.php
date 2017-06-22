<?php
use \yii\helpers\Url;
use \app\components\tona\Helper;
use \app\components\tona\Common;
use app\components\tona\Role;
?>
<div class="col-md-3 left_col menu_fixed">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
			<a href="<?= Yii::$app->getHomeUrl() ?>admin" class="site_title">
				<img src="/web/images/logo2.png" alt="Tona Nguyen" height="35">
				<span><?= Common::currentUser('name') ?></span></a>
		</div>

		<div class="clearfix"></div>

		<!-- menu profile quick info -->
		<div class="profile">
			<div class="profile_pic">
				<img src="<?= Helper::userAvatar() ?>" alt="..." class="img-circle profile_img">
			</div>
			<div class="profile_info">
				<span>Welcome,</span>
				<h2><?= Common::currentUser('name') ?></h2>
			</div>
		</div>
		<!-- /menu profile quick info -->

		<br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<h3>General</h3>
				<ul class="nav side-menu">
					<li class="<?= Helper::checkMenuAdmin(['users']) ?>"><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li class="<?= Helper::checkMenuAdmin(['index'], true, 'current-page')?>"><a href="<?= Url::to('/admin/users/') ?>">List</a></li>
							<li class="<?= Helper::checkMenuAdmin(['create'], true, 'current-page')?>"><a href="<?= Url::to('/admin/users/create') ?>">Create</a></li>
							<li class="<?= Helper::checkMenuAdmin(['index'], true, 'current-page')?>"><a href="<?= Url::to('/admin/events/my-calendar') ?>">My calendar</a></li>
						</ul>
					</li>
					<li class="<?= Helper::checkMenuAdmin(['spend-management']) ?>"><a href="<?= Url::to('/admin/spend-management/index') ?>"><i class="fa fa-exchange"></i> Expenditure manager</a>
						<!--<ul class="nav child_menu">
							<li class="<?/*= Helper::checkMenuAdmin(['index'], true, 'current-page')*/?>"><a href="<?/*= Url::to('/admin/spend-management/index?sort=time') */?>">Danh sách</a></li>
							<li class="<?/*= Helper::checkMenuAdmin(['create'], true, 'current-page')*/?>"><a href="<?/*= Url::to('/admin/spend-management/create') */?>">Tạo mới</a></li>
							<li class="<?/*= Helper::checkMenuAdmin(['index'], true, 'current-page')*/?>"><a href="<?/*= Url::to('/admin/spend-management-type/') */?>">Loại</a></li>
						</ul>-->
					</li>
					<li class="<?= Helper::checkMenuAdmin(['spend-management-type']) ?>"><a href="<?= Url::to('/admin/spend-management-type/index?sort=sorted') ?>"><i class="fa fa-cubes"></i> Expenditure categories</a>
					</li>
					<!--<li><a><i class="fa fa-key"></i> Role <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?/*= Url::to('/admin/user-role/') */?>">List</a></li>
							<li><a href="<?/*= Url::to('/admin/user-role/create') */?>">Create</a></li>
						</ul>
					</li>

					<li class="<?/*= Helper::checkMenuAdmin(['article', 'article-category']) */?>"><a><i class="fa fa-book"></i> Article <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?/*= Url::to('/admin/article/') */?>">Article</a></li>
							<li><a href="<?/*= Url::to('/admin/article-category') */?>">Article Category</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-newspaper-o"></i> News <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?/*= Url::to('/admin/news/') */?>">List</a></li>
							<li><a href="<?/*= Url::to('/admin/news-category/') */?>">Categories</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-caret-square-o-right"></i> Carousel <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?/*= Url::to('/admin/carousel/') */?>">List</a></li>
							<li><a href="<?/*= Url::to('/admin/carousel-items/create') */?>">Add item</a></li>
							<li><a href="<?/*= Url::to('/admin/carousel/create') */?>">Create</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-map-marker"></i> Locations <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?/*= Url::to('/admin/locations/') */?>">List</a></li>
							<li><a href="<?/*= Url::to('/admin/locations/create') */?>">Create</a></li>
						</ul>
					</li>-->

					<!--<li><a><i class="fa fa-briefcase"></i> Jobs <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?/*= Url::to('/admin/jobs/') */?>">Jobs</a></li>
							<li><a href="<?/*= Url::to('/admin/job-categories/') */?>">Jobs categories</a></li>
							<li><a href="<?/*= Url::to('/admin/company') */?>">Company</a></li>
							<li><a href="<?/*= Url::to('/admin/candidate') */?>">Candidate</a></li>
						</ul>
					</li>-->

					<!--<li><a><i class="fa fa-file"></i> Pages <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?/*= Url::to('/admin/page/') */?>">List</a></li>
							<?php /*if(Role::checkAdminTN()){ */?>
							<li><a href="<?/*= Url::to('/admin/page/create') */?>">Create</a></li>
							<?php /*} */?>
						</ul>
					</li>-->

					<li><a><i class="fa fa-cogs"></i> Setting <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?= Url::to('/admin/setting/') ?>">List</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-cubes"></i> System <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?= Url::to('/admin/system/') ?>">List</a></li>
							<li><a href="<?= Url::to('/admin/log-system/index?sort=-time') ?>">Log system</a></li>
							<li><a href="<?= Url::to('/admin/cache-img/index?sort=-created_at') ?>">Cache Images</a></li>
							<li><a href="<?= Url::to('/admin/user-online') ?>">User online</a></li>
							<li><a href="<?= Url::to('/admin/admin/backup-db') ?>">Backup DB</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-cubes"></i> Theme <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?= Url::to('/admin/theme/update') ?>">Footer</a></li>
							<li><a href="<?= Url::to('/admin/theme/style') ?>">Style</a></li>
						</ul>
					</li>

				</ul>
			</div>
			<!--<div class="menu_section">
				<h3>Live On</h3>
				<ul class="nav side-menu">
					<li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
				</ul>
			</div>-->

		</div>
		<!-- /sidebar menu -->

		<!-- /menu footer buttons -->
		<div class="sidebar-footer hidden-small">
			<a data-toggle="tooltip" data-placement="top" title="Settings">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="FullScreen">
				<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Lock">
				<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Logout">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</a>
		</div>
		<!-- /menu footer buttons -->
	</div>
</div>