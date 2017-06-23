/**
 * Created by Administrator on 8/9/2016.
 */


$(function () {
    Site.init();
});

var Site = function () {
    return {
        init: function () {
            this.events();
            this.initPlugins();
        },
        initPlugins: function () {
            $('.icheck').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass: 'iradio_flat-red'
            });
            $('.checkbox').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass: 'iradio_flat-red'
            });
        },
        events: function () {
        }
    }
}();
