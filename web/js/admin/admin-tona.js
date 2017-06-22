$(function () {
    TNAdmin.init();
});

var TNAdmin = function () {

    return {
        init: function () {
            this.events();
        },
        events: function () {
            TNAdmin.doFormatMoney();
        },
        doFormatMoney: function(){
            var moneyInput = $('.money-v');
            if(moneyInput.length > 0){
                moneyInput.each(function(){
                    var _this = $(this);
                    _this.autoNumeric('init', {allowDecimalPadding : false});
                    _this.on('change', function(){
                        var _val = _this.autoNumeric('get');
                        _this.closest('.moneys').find('.money').val(_val);
                    });
                });
            }
        }

    }
}();