$(function () {
    Admin.init();
});

var Admin = function () {
    var _TNSERVICE               = TNService;
    return {
        init: function () {
            this.events();
        },
        events: function () {
            /*
            * Set cookie menu togle
            * */
            $('#menu_toggle').on('click', function () {
                _TNSERVICE.getCallback('/admin/ajax/index?cookie_name=nav-md~nav-sm', function(res){});
            });

            $('input.createSlug').on('keyup change', function () {
                var _this = $(this);
                var _put = _this.attr('data-target');
                Admin.createSlug($(this).val(), _put);
            });

            $(window).load(function () {
                setTimeout(function () {
                    Admin.doCallPHPWorking(); /* Call to PHP make function */
                }, 3000);

            });
        },
        createSlug: function(_val, _put) {
            _TNSERVICE.postCallback('/admin/ajax/create-slug', {'name' : _val}, function (res) {
                console.log(res);
                $('body').find(_put).val(res.slug);
            });
        },
        doCallPHPWorking: function () {
            TNService.getCallback('/admin/ajax/php-working', function () {});
        }
    }
}();