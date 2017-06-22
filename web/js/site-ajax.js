$(function () {
    SiteAjax.init();
});

var SiteAjax = function () {
    var body        = 'body';
    var login       = '#login-modal';
    var selectLogin = '#modal-select-form';
    var signupModal = '#signup-modal';
    var signupModalCompany = '#signup-modal-company';

    return {
        init: function () {
            this.events();
            this.registerUser();
            this.registerUserCompany();
        },
        events: function () {
            if (!_.isUndefined($(login))) {
                SiteAjax.loginUser();
            }

            SiteAjax.popupFormRegisterCompany("show");
        },
        loginUser: function () {
            $(login).on('click', 'form .loginmodal-submit', function (e) {
                var form = $(this).closest('form');
                var data = form.serialize();
                TNService.postCallback(form.attr('action'), data, function (result) {
                    if (result.error == true) {
                        Common.showErrorForm(form, result.message, 3000);
                    }
                });

                e.preventDefault();
            });

            $(body).on('click','.signup-select-modal', function(e){
                $('#modal-select-form').modal('show');
                e.preventDefault();
            });

            $(selectLogin).on('click', 'button.select-form', function(){
                var id = $(this).val();
                $(selectLogin).modal('hide');
                if(id == 0){
                    SiteAjax.popupFormRegister('show');
                }
                if(id == 1){
                    SiteAjax.popupFormRegisterCompany('show');
                }
            });

            $(body).on('click', '.login-form', function(){
                SiteAjax.popupFormLogin('show');
            });
            $(signupModal).on('click', '.open-form-company', function(){
                SiteAjax.popupFormRegisterCompany('show');
            });

            $(signupModalCompany).on('click', '.open-form-register', function(){
                SiteAjax.popupFormRegister('show');
            });
        },
        popupFormLogin: function(act){
            $('#login-modal').modal(act);
        },
        popupFormRegister: function(act){
            $('#signup-modal').modal(act);
        },
        popupFormRegisterCompany: function(act){
            $('#signup-modal-company').modal(act);
        },
        registerUser: function () {
            /* Form register */
            $(signupModal).on('click', 'button[data-ajax="submit-form"]', function (e) {
                var _this = $(this);
                _this.attr('disabled', true);

                var form = $(this).closest('form');
                var data = form.serialize();
                TNService.postCallback(form.attr('action'), data, function (result) {
                    if (result.error == true) {
                        Common.showErrorForm(form, result.message, 3000);
                    }
                    if (result.error == false) {
                        Common.showSuccessForm(form, result.message, 30000);
                    }
                    _this.attr('disabled', false);
                });
                return false;
            });
        },

        registerUserCompany: function () {
            /* Form register */
            $(signupModalCompany).on('click', 'button[data-ajax="submit-form"]', function (e) {
                var _this = $(this);
                _this.attr('disabled', true);

                var form = $(this).closest('form');
                var data = form.serialize();
                TNService.postCallback(form.attr('action'), data, function (result) {
                    if (result.error == true) {
                        Common.showErrorForm(form, result.message, 3000);
                    }
                    if (result.error == false) {
                        Common.showSuccessForm(form, result.message, 30000);
                    }
                    _this.attr('disabled', false);
                });
                return false;
            });
        }
    }
}();