<?php
use \yii\bootstrap\ActiveForm;
use app\components\tona\Common;
use app\components\tona\Helper;

$readOnly = false;
if(\app\components\tona\Login::checked()){
	$readOnly = true;
}
?>
<div class="container recruitment form-default">
	<div class="col-lg-12 top-title text-center wow zoomIn">
		<h1>GỬI MỘT CV</h1>
		<p>Hãy gửi CV của bạn để các nhà tuyển dụng có thể tìm kiếm.</p>
	</div>

	<?php if(!\app\components\tona\Login::checked()){ ?>
		<div class="col-lg-12">
			<div class="alert alert-warning text-center">
				<p>
					BẠN CHƯA CÓ TÀI KHOẢN ?
					<br>
					Nếu bạn không có tài khoản bạn có thể tạo dưới đây bằng cách nhập địa chỉ email của bạn / tên người dùng. Một mật khẩu sẽ được tự động gửi qua email cho bạn.
				</p>
			</div>
		</div>
	<?php } ?>
	<div class="col-lg-12">
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
	</div>
</div>