<?php
use app\components\tona\Helper;
?>
<div class="col-lg-4">
	<aside class="right-sidebar">
		<div class="widget">
			<form class="form-search">
				<input class="form-control" type="text" placeholder="Search..">
			</form>
		</div>
		<div class="widget">
			<h5 class="widgetheading">Công trình</h5>
			<ul class="cat">
				<?php
				if($project){
				foreach($project as $key => $value){
				?>
				<li><i class="icon-angle-right"></i><a href="<?= \yii\helpers\Url::to('/cong-trinh/'.$value['slug'].'.html') ?>"><?= $value['name'] ?></a></li>
					<?php
				}
				}else{
				?>
				<li>
					<h6>No data.</h6>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div class="widget">
			<h5 class="widgetheading">Tin tức</h5>
			<ul class="recent">
				<?php
				if($lastNews){
					foreach($lastNews as $key => $value){
						?>
						<li>
							<img src="<?= Helper::thumbnail(\app\models\CacheImg::OBJECT_TYPE_NEWS_SIDEBAR, $value['id'], $value['image'], 65, 65) ?> " class="pull-left" alt="<?= $value['name'] ?>" />
							<h6><a href="<?= \yii\helpers\Url::to('/tin-tuc/'. $value['slug'].'.html') ?>"><?= $value['name'] ?></a></h6>
							<p>
								<?= $value['description'] ?>
							</p>
						</li>
						<?php
					}
				}else{
					?>
					<li>
						<h6>No lastest news.</h6>
					</li>
					<?php
				}
				?>
			</ul>
		</div>
		<div class="widget">
			<h5 class="widgetheading">Thống kê truy cập</h5>
			<?php
			$user = \app\components\UserOnlineWidget::getStatistic();
			?>
			<ul class="tags">
				<li><a>Hôm nay: <?= $user->today ?></a></li>
				<li><a>Tuần này: <?= $user->week ?></a></li>
				<li><a>Tháng này: <?= $user->month ?></a></li>
				<li><a>Tất cả: <?= $user->total ?></a></li>
			</ul>
		</div>
	</aside>
</div>