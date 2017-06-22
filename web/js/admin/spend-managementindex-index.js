$(document).ready(function(){
    $(function () {
        SpendManagement.init();
    });
});

var SpendManagement = function () {
    var list_filter_spend_management = $('input#spend-management-index');
    var btn_doSearch = $('#doSearch');
    var container_spend_management = list_filter_spend_management.closest('.spend-management-index');
    var formFillter = container_spend_management.find('form#from-filter');

    return {
        init: function () {
            this.events();
            if(list_filter_spend_management.length > 0){
                formFillter.on('click', '#doSearch', function(e){
                    e.preventDefault();
                    SpendManagement.doFilter(formFillter);
                });
                SpendManagement.doFilter(formFillter);
            }
            SpendManagement.showComfirm();
        },
        events: function () {

        },
        doFilter: function(formFillter){
            var data = formFillter.serialize();
            TNService.postCallback(list_filter_spend_management.attr('data-url-list'), data, function(res){
                var html = '';
                if(res.data.length > 0){
                    html = _.template($('#spend-management-template').html())({'datas' : res.data});
                }else{
                    html = _.template($('#spend-management-template-null').html())();
                }
                $('#spend-management-put').html(html);
                SpendManagement.afterSearch();
                container_spend_management.find('.statistical p.exp span').html(res.statistical.chi);
                container_spend_management.find('.statistical p.imp span').html(res.statistical.thu);
            });
        },
        afterSearch: function(){
            btn_doSearch.button('reset');
        },
        showComfirm: function(){
            container_spend_management.on('click', '[data-widget="confirm-delete"]', function(e){
                var title = $(this).attr('title');
                var content = $(this).attr('data-confirm-text');
                var url = $(this).attr('href');
                e.preventDefault();
                $.confirm({
                    title: title,
                    content: content,
                    autoClose: 'cancel|15000',
                    buttons: {
                        deleteUser: {
                            text: 'DELETE',
                            action: function () {
                                SpendManagement.doDelete(url);
                            }
                        },
                        cancel: function () {
                        }
                    }
                });
            });
        },
        doDelete: function(url){
            TNService.getCallback(url, function(res){
                if(res.error == false){
                    SpendManagement.doFilter(formFillter);
                }
            });
        }
    }
}();