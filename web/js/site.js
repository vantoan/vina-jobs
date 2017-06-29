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

            // add the animation to the popover
            $('a[rel=popover]').popover().click(function(e) {
                e.preventDefault();
                var open = $(this).attr('data-easein');
                if (open == 'shake') {
                    $(this).next().velocity('callout.' + open);
                } else if (open == 'pulse') {
                    $(this).next().velocity('callout.' + open);
                } else if (open == 'tada') {
                    $(this).next().velocity('callout.' + open);
                } else if (open == 'flash') {
                    $(this).next().velocity('callout.' + open);
                } else if (open == 'bounce') {
                    $(this).next().velocity('callout.' + open);
                } else if (open == 'swing') {
                    $(this).next().velocity('callout.' + open);
                } else {
                    $(this).next().velocity('transition.' + open);
                }

            });

            // add the animation to the modal
            $(".modal").each(function(index) {
                $(this).on('show.bs.modal', function(e) {
                    var open = $(this).attr('data-easein');
                    if (open == 'shake') {
                        $('.modal-dialog').velocity('callout.' + open);
                    } else if (open == 'pulse') {
                        $('.modal-dialog').velocity('callout.' + open);
                    } else if (open == 'tada') {
                        $('.modal-dialog').velocity('callout.' + open);
                    } else if (open == 'flash') {
                        $('.modal-dialog').velocity('callout.' + open);
                    } else if (open == 'bounce') {
                        $('.modal-dialog').velocity('callout.' + open);
                    } else if (open == 'swing') {
                        $('.modal-dialog').velocity('callout.' + open);
                    } else {
                        $('.modal-dialog').velocity('transition.' + open);
                    }

                });
            });
        },
        events: function () {
        }
    }
}();
