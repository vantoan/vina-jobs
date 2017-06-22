$(document).ready(function(){
    $(function () {
        Task.init();
    });
});

var Task = function () {
    var _md_form = $('#task-personal');
    var personal_template_put = $('#personal-template-put');
    var _to_do_list = $('#to-do-list');
    var isEdit      = false;
    return {
        init: function () {
            if(_md_form.length > 0){
                this.events();
            }
        },
        events: function () {
            Task.form();
            Task.loadTaskPersonal();
            $('#to-do-list').on('click', 'a.add-task', function(){
                isEdit = false;
                _md_form.find('input').val('');
                _md_form.find('textarea').val('');
                _md_form.find('.modal-title').html('Add task');
                _md_form.modal('show');
            });
            personal_template_put.on('click', '.edit', function(){
                isEdit = true;
                var id = $(this).closest('li').attr('data-id');
                _md_form.find('.modal-title').html('Update task');
                _md_form.find('.form-group').removeClass('has-error');
                _md_form.find('.help-block').html('');
                Task.formEdit(id);
            });
            personal_template_put.on('click', '.close', function(){
                var _this = $(this);
                var id = _this.closest('li').attr('data-id');
                var title = 'Confirm';
                var content = 'Are you want you sure delete this task ?';
                $.confirm({
                    title: title,
                    content: content,
                    autoClose: 'cancel|15000',
                    buttons: {
                        deleteUser: {
                            text: 'DELETE',
                            action: function () {
                                Task.closeTask(_this, id);
                            }
                        },
                        cancel: function () {
                        }
                    }
                });
            });
            personal_template_put.on('click', '.icheck', function(){

            });
            personal_template_put.iCheck('check', '.edit', function(){
                alert('Well done, Sir');
            });
        },
        loadTaskPersonal: function(){
            TNService.getCallback(_to_do_list.attr('data-url-list'), function(res){
                var html = '';
                if(res.data.length > 0){
                    html = _.template($('#personal-template').html())({'datas' : res.data});
                }else{
                    html = _.template($('#personal-template-null').html())();
                }
                $('#personal-template-put').html(html);
                $('.icheck').iCheck({
                    checkboxClass: 'icheckbox_square-green'
                });
                $('._mCustomScrollbar').mCustomScrollbar();
            });
        },
        form: function(){
            _md_form.on('click', '.save', function(){
                var form = $(this).closest('form');
                var data = form.serialize();
                console.log(form.attr('action'));
                TNService.postCallback(form.attr('action'), data, function(res){
                   if(res.error == false){
                       Task.loadTaskPersonal();
                       _md_form.modal('hide');
                   }
                });
            });
        },
        formEdit: function(id){
            TNService.getCallback(_to_do_list.attr('data-url-task-detail') + id, function(res){
                if(res.error == false){
                    $.each(res.data, function(key, item){
                        console.log(key, item);
                        _md_form.find('#taskpersonalform-' + key).val(item);
                    });
                    _md_form.modal('show');
                }
            });
        },
        closeTask: function(_this, id){
            TNService.getCallback(_to_do_list.attr('data-url-task-delete') + id, function(res){
                if(res.error == false){
                    _this.closest('li').slideUp();
                }
            });
        },
        checkTask: function(){

        }

    }
}();