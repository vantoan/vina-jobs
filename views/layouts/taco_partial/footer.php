<?php
use app\components\tona\Helper;
?>
<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<div class="widget">
				<h5 class="widgetheading">Thông tin liên hệ</h5>
				<address>
					<strong>Công ty TNHH Tư vấn Đầu tư Xây dựng Taco </strong>
<br>
					Địa chỉ: 36/27/37 Bùi Tư Toàn, Khu phố 4, Phường An Lạc, Quận Bình Tân, TPHCM
</address>
				<p>
					<i class="icon-phone"></i>Phone: +1 234 56-78 <br>
					<i class="icon-envelope-alt"></i> E-mail: info@xaydungtaco.com
				</p>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="widget">
				<?php
				$lastest = \app\models\Article::getArticle('du-an', 5);
				?>
				<h5 class="widgetheading">Bài viết mới nhất</h5>
				<ul class="link-list">
					<?php
					if($lastest){
						foreach($lastest as $value){
							?>
							<li><a href="<?= Helper::urlTo('cong-trinh', $value['slug']) ?>"><?= $value['name']?></a></li>
					<?php
						}
					}
					?>
				</ul>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="widget">
				<h5 class="widgetheading">Bản đồ</h5>
<!--				<div class="flickr_badge">-->
<!--					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.176419420265!2d106.61323281422654!3d10.79779639230701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bfc6a83579d%3A0x9393029f14568650!2zVMOibiBL4buzIFTDom4gUXXDvSwgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1477151766272" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>-->
					<img src="<?= Helper::siteURL()?>/web/uploads/map-ft.jpg" width="100%" />
<!--				</div>-->
				<div class="clear">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="sub-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="copyright">
					<p>© <?= \app\components\tona\Helper::siteURL() ?></p>
					<div class="credits">
						<!--
							All the links in the footer should remain intact.
							You can delete the links only if you purchased the pro version.
							Licensing information: https://bootstrapmade.com/license/
							Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Moderna
						-->
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<ul class="social-network">
					<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>