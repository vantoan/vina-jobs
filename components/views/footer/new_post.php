<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/12/2016
 * Time: 8:37 PM
 */
use yii\helpers\Html;
?>
<?php if($dataList){ ?>
<ul>
	<?php
		foreach($dataList as $key => $article){
			echo '<li>'.Html::a($article->title, ['articles/view', 'slug' => $article->slug]) .'</li>';
		}
	?>
</ul>
<?php }else{ ?>
	<ul>
		<li>Ch?a có d? li?u.</li>
	</ul>
<?php } ?>