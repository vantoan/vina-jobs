(function ($) {
    $.fn.i_datepicker = function(options) {
        var that = this;
        if (typeof options === 'undefined') {
            options = {};
        }
        var setting = $.extend({}, that.i_datepicker.defaults, options);

        that.each(function(){
            var those = $(this);
            those.wrap('<div class="datepicker-group">');
            those.after('<i class="zmdi zmdi-calendar"></i>');
            $(this).datepicker(setting);
        });
        return that;
    };

    $.fn.i_datepicker.defaults = {
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true
    };
})(jQuery);

(function($) {
    $.fn.serializeFiles = function() {
        var obj = $(this);
        /* ADD FILE TO PARAM AJAX */
        var formData = new FormData();
        $.each($(obj).find("input[type='file']"), function(i, tag) {
            $.each($(tag)[0].files, function(i, file) {
                formData.append(tag.name, file);
            });
        });
        var params = $(obj).serializeArray();
        $.each(params, function (i, val) {
            formData.append(val.name, val.value);
        });
        return formData;
    };
})(jQuery);