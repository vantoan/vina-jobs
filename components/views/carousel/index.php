<?php
use app\components\tona\Helper;
use \app\models\CacheImg;
?>

<ul class="slides">
	<?php
	foreach($data as $k => $v){
		?>
		<li>
			<img src="<?= Helper::thumbnail(CacheImg::OBJECT_TYPE_CAROUSEL, $v['id'], $v['img_view'], 1130, 400) ?>" alt="" />
			<div class="flex-caption">
				<h3><?= $v['title'] ?></h3>
				<p><?= $v['description'] ?></p>
				<a href="<?= $v['link'] ?>" target="<?= $v['target'] ?>" class="btn btn-theme">Đọc thêm</a>
			</div>
		</li>
		<?php
	}
	?>
</ul>
