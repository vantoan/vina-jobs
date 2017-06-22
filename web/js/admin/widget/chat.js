$(document).ready(function(){
    $(function () {
        Chat.init();
    });
});

var Chat = function () {
    var _wg_chat = $('.open-chat');
    var _wg_chat_box = $('#qnimate');
    var popup_messages = $('.popup-messages');
    var contentChatWrap = $('.direct-chat-messages');
    var contentChat = $('.direct-chat-messages .content-chat');
    var _curent_user_id = 0;

    var config = {
        apiKey: "AIzaSyBp_-otlf0tx9OcieB2MzOE_TlKGC9umho",
        authDomain: "chatbase-f7163.firebaseapp.com",
        databaseURL: "https://chatbase-f7163.firebaseio.com",
        projectId: "chatbase-f7163",
        storageBucket: "chatbase-f7163.appspot.com",
        messagingSenderId: "554189497169"
    };
    firebase.initializeApp(config);

    return {
        init: function () {
            if(_wg_chat.length > 0){
                this.events();
                this.chats();
                this.getMembers();
                this.callFirebase();
            }
        },
        events: function () {
            $("#contact-list").on('click', 'li.list-group-item', function () {
                Chat.openChatBox($(this));
            });

            $("#removeClass").click(function () {
                $('#qnimate').removeClass('popup-box-on');
            });

            popup_messages.mCustomScrollbar({'theme' : 'light-thick'});
        },
        openChatBox: function(_this){
            var group_id = _this.attr('data-group-id');
            var user_id = _this.attr('data-user-id');
            _wg_chat_box.attr('data-group-id', group_id);
            _wg_chat_box.attr('data-user-id', user_id);
            _wg_chat_box.find('.data-user-name').html(_this.attr('data-user-name'));
            _wg_chat_box.addClass('popup-box-on');
            Chat.loadMessage();
        },
        chats: function(){
            var _message = $('#status_message');
            _message.keypress(function(e) {
                if(e.which == 13) {
                    if($.trim($(this).val()) != ''){
                        Chat.sendMessage($(this));
                    }else{
                        $(this).val('');
                    }
                }
            });
        },
        sendMessage: function(_this){
            TNService.postCallback(_wg_chat_box.attr('data-url'), {'message_text' : $.trim(_this.val())}, function(res){
                if(res.error == false){
                    Chat.callFirebasePush(res.data);
                    //Chat.renderMessage(res.data);
                    _this.val('');
                    _this.focus();
                }
            });
        },
        getMembers: function() {
            TNService.getCallback(_wg_chat_box.attr('data-url-list-members'), function(res){
                if(res.error == false){
                    var template = _.template($('#template-members').html())({'data' : res.data});
                    $('#contact-list').html(template);
                }
            });
        },
        loadMessage: function(){
            var group_id = _wg_chat_box.attr('data-group-id');
            var user_id = _wg_chat_box.attr('data-user-id');
            var url = _wg_chat_box.attr('data-url-list-messge') + '?group_id=' + group_id + '&user_id=' + user_id;

            TNService.getCallback(url, function(messege){
                if(messege.data){
                    $.each(messege.data, function(k, v){
                        var data = {
                            'name' : 'Me',
                            'message_text' : v.content,
                            'time_sended' : v.time_sended
                        };
                        if(v.me_sender){
                            var template = _.template($('#template-chat-me').html())({'data' : data});
                        }else{
                            var template = _.template($('#template-chat-me').html())({'data' : data});
                        }
                        contentChat.append(template);
                    });
                }
            });
        },
        callFirebase: function() {
            var ratingRef = firebase.database().ref("messages/");
            console.log(11111111);
            /*ratingRef.orderByValue().on("value", function (data) {
                data.forEach(function (data) {
                    console.log("The " + data.key + " rating is " + data.val().name);
                });
            });*/
        },
        callFirebasePush: function(data) {
            var playersRef = firebase.database().ref("messages/");
            playersRef.push(data);
        },
        renderMessage: function(data){
            var template = _.template($('#template-chat-me').html())({'data' : data});
            contentChat.append(template);
            popup_messages.mCustomScrollbar('scrollTo','bottom');
        }
    }
}();