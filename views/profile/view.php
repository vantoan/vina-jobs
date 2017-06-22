<div class="container <?= Yii::$app->controller->id ?>">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 text-right toppad">
			<p class=" text-info"><?= \app\components\tona\Date::getDateNow() ?> | <a href="edit.html" >Thoát</a></p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 toppad" >

			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><?= \app\components\tona\Common::currentUser('name') ?></h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>

						<div class=" col-md-9 col-lg-9 ">
							<table class="table table-user-information">
								<tbody>
								<tr>
									<td>Họ và tên:</td>
									<td>Programming</td>
								</tr>
								<tr>
									<td>Giới tính:</td>
									<td>06/23/2013</td>
								</tr>
								<tr>
									<td>Ngày sinh</td>
									<td>01/24/1988</td>
								</tr>

								<tr>
								<tr>
									<td>Số điện thoại</td>
									<td>Male</td>
								</tr>
								<tr>
									<td>Địa chỉ</td>
									<td>Metro Manila,Philippines</td>
								</tr>
								<tr>
									<td>Email</td>
									<td><a href="mailto:info@support.com">info@support.com</a></td>
								</tr>
								<td>Phone Number</td>
								<td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
								</td>

								</tr>

								</tbody>
							</table>

							<a href="#" class="btn btn-primary">My Sales Performance</a>
							<a href="#" class="btn btn-primary">Team Sales Performance</a>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="<?= \yii\helpers\Url::to('/'.$model->username.'/profile/update.html')?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
				</div>

			</div>
		</div>
	</div>
</div>