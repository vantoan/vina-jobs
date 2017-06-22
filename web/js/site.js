/**
 * Created by Administrator on 8/9/2016.
 */


$(function () {
    Site.init();
    Common.datePicker();
    Common.select2();
});

var Site = function () {
    var _TNSERVICE               = TNService;
    return {
        init: function () {
            this.events();
            this.initSite();
            this.consulting();
        },
        events: function () {

        },
        initSite: function(){
            var listService = '#listService';
            if($(listService).length){
                var html = _.template($(listService).html());
                $('.popover-index').popover({
                    animation: true,
                    trigger: 'click',
                    html: true,
                    content: html,
                    container: '.container-popover-index',
                    placement: 'bottom'
                });
            }
        },
        consulting: function(){
            var consulting = $('#consulting');
            if(consulting.length > 0){
                var id = consulting.find('ul.nav-stacked li.active a').attr('data-id');
                Site.consultingLoad(consulting, consulting.attr('data-url'), id);
            }
            consulting.on('click', 'ul.nav-stacked li a', function(){
                Site.consultingLoad(consulting, consulting.attr('data-url'), $(this).attr('data-id'));
            });
        },
        consultingLoad: function(_this, url, id){
            _TNSERVICE.getCallback(url + '?id=' + id, function (result) {
                var results = result;
                var html = '';
                if(results.error == true){
                    html = '<p>' + results.message + '</p>';
                }else{
                    html = '<h4>' + results.name + '</h4>';
                    html += '<div>' + results.content + '</div>';
                }

                _this.find('.tab-content #tab_a').html(html);
            });
        }
    }
}();

tinymce.init({ selector:'textarea.tinymce', height: 230 });

