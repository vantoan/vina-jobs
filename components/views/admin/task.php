<?php
/* @var $this yii\web\View */

?>
<div class="x_panel" id="to-do-list"
     data-url-list="<?= \yii\helpers\Url::to(['admin/ajax/load-task'], true) ?>"
     data-url-task-detail="<?= \yii\helpers\Url::to(['admin/ajax/load-task-to-edit?id='], true) ?>"
     data-url-task-delete="<?= \yii\helpers\Url::to(['admin/ajax/task-to-delete?id='], true) ?>"
	>
	<div class="x_title">
		<h2>To Do List</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
			<li><a class="add-task"><i class="fa fa-plus"></i></a></li>
			<!--<li><a class="close-link"><i class="fa fa-close"></i></a></li>-->
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">

		<div class="">
			<ul class="to_do _mCustomScrollbar" id="personal-template-put" style="height: 328px">
				<li class="text-center">
					<p><i class='fa fa-spinner fa-spin '></i></p>
				</li>
			</ul>
		</div>
	</div>
</div>
<script type="text/template" id="personal-template-null">
	<li class="text-center">
		<p><span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span></p>
	</li>
</script>
<script type="text/template" id="personal-template">
	<% _.each(datas, function(item, key){ %>
	<li data-id="<%= item.id %>">
		<p title="<%= item.due_date %>"><input type="checkbox" class="icheck" <% if(item.status == 1){ %> checked <% } %> >
			<a href="#" class="edit"><%= item.name %></a><br>
			<small>Due date: <%= item.due_date %></small>
			<a href="#" class="right close"><i class="fa fa-close"></i></a>
		</p>
	</li>
	<% }); %>
</script>
<!-- Modal -->
<div class="modal fade" id="task-personal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php $form = \yii\bootstrap\ActiveForm::begin(['action' => \yii\helpers\Url::to(['admin/ajax/create-task'], true)]); ?>
			<input type="hidden" id="taskpersonalform-id" name="id" value="0">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Add task</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<?= $form->field($model, 'name')->textInput() ?>
					</div>
					<div class="col-sm-6 col-xs-12">
						<?= $form->field($model, 'due_date')->textInput(['class' => 'datetimepicker1 form-control', 'data-date-time-format' => "DD/MM/YYYY HH:mm"]) ?>
					</div>
				</div>

				<?= $form->field($model, 'content')->textarea() ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary save loading" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Saving...">Save</button>
			</div>
			<?php \yii\bootstrap\ActiveForm::end(); ?>
		</div>
	</div>
</div>