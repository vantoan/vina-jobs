<div class="popup-box chat-popup" id="qnimate"
     data-url="<?= \yii\helpers\Url::to('/chat/send-message'); ?>"
     data-url-list-members="<?= \yii\helpers\Url::to('/chat/get-members'); ?>"
     data-url-list-messge="<?= \yii\helpers\Url::to('/chat/get-message'); ?>"
	 data-user-id="0"
	 data-group-id="0"
	>
	<div class="popup-head">
		<div class="popup-head-left pull-left">
			<img
				src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg"
				alt="iamgurdeeposahan"><span class="data-user-name">Tona</span>
		</div>
		<div class="popup-head-right pull-right">
			<div class="btn-group">
				<button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
					<i class="glyphicon glyphicon-cog"></i></button>
				<ul role="menu" class="dropdown-menu pull-right">
					<li><a href="#">Media</a></li>
					<li><a href="#">Block</a></li>
					<li><a href="#">Clear Chat</a></li>
					<li><a href="#">Email Chat</a></li>
				</ul>
			</div>

			<button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i
					class="glyphicon glyphicon-off"></i></button>
		</div>
	</div>
	<div class="popup-messages">
		<div class="direct-chat-messages scroll-view">
			<div class="content-chat">

			</div>
			<!--<div class="chat-box-single-line">
				<abbr class="timestamp">October 8th, 2015</abbr>
			</div>-->

		</div>
	</div>
	<div class="popup-messages-footer">
		<textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>

		<div class="btn-footer">
			<button class="bg_none"><i class="glyphicon glyphicon-film"></i></button>
			<button class="bg_none"><i class="glyphicon glyphicon-camera"></i></button>
			<button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i></button>
			<button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i></button>
		</div>
	</div>
</div>
<div id="members-chat">
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading c-list">
					<span class="title">Contacts</span>
					<ul class="pull-right c-controls">
						<li><a href="#cant-do-all-the-work-for-you" data-toggle="tooltip" data-placement="top" title="Add Contact"><i class="glyphicon glyphicon-plus"></i></a></li>
						<li><a href="#" class="hide-search" data-command="toggle-search" data-toggle="tooltip" data-placement="top" title="Toggle Search"><i class="fa fa-ellipsis-v"></i></a></li>
					</ul>
				</div>

				<div class="row hide">
					<div class="col-xs-12">
						<div class="input-group c-search">
							<input type="text" class="form-control" id="contact-list-search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                            </span>
						</div>
					</div>
				</div>

				<ul class="list-group" id="contact-list">
					<li class="list-group-item">
						<p>Loading...</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<script type="text/template" id="template-members">
	<% _.each(data, function(k,v){ %>
	<li class="list-group-item" data-user-name="<%= k['name'] %>" data-group-id="<%= k['group_id'] %>" data-user-id="<%= k['id'] %>">
		<div class="col-xs-12 col-sm-3">
			<img src="http://api.randomuser.me/portraits/women/76.jpg" alt="Glenda Patterson" class="img-responsive img-circle" />
		</div>
		<div class="col-xs-12 col-sm-9">
			<span class="name"><%= k['name'] %></span><br/>
			<span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5020 Poplar Dr"></span>
			<span class="visible-xs"> <span class="text-muted">5020 Poplar Dr</span><br/></span>
			<span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(538) 718-7548"></span>
			<span class="visible-xs"> <span class="text-muted">(538) 718-7548</span><br/></span>
			<span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="glenda.patterson@example.com"></span>
			<span class="visible-xs"> <span class="text-muted">glenda.patterson@example.com</span><br/></span>
		</div>
		<div class="clearfix"></div>
	</li>
	<% }); %>
</script>
<script type="text/template" id="template-chat-not-me">
	<!-- Message. Default to the left -->
	<div class="direct-chat-msg doted-border">
		<div class="direct-chat-info clearfix">
			<span class="direct-chat-name pull-left">Osahan</span>
		</div>
		<!-- /.direct-chat-info -->
		<img alt="message user image"
			 src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg"
			 class="direct-chat-img"><!-- /.direct-chat-img -->
		<div class="direct-chat-text">
			Hey bro, how’s everything going ?
		</div>
		<div class="direct-chat-info clearfix">
			<span class="direct-chat-timestamp pull-right">3.36 PM</span>
		</div>
		<div class="direct-chat-info clearfix">
						<span class="direct-chat-img-reply-small pull-left">

						</span>
			<span class="direct-chat-reply-name">Singh</span>
		</div>
		<!-- /.direct-chat-text -->
	</div>
	<!-- /.direct-chat-msg -->
</script>
<script type="text/template" id="template-chat-me">
	<!-- Message. Default to the left -->
	<div class="direct-chat-msg doted-border">
		<div class="direct-chat-info clearfix">
			<span class="direct-chat-name pull-right"><%= data.name %></span>
		</div>
		<div class="direct-chat-text">
			<%= data.message_text %>
		</div>
		<div class="direct-chat-info clearfix">
			<span class="direct-chat-timestamp pull-right"><%= data.time_sended %></span>
		</div>
	</div>
</script>