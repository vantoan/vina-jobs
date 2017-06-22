$(function () {
    Client.init();
});

var Client = function () {
    var el          = '#tn-information-to-connect';

    return {
        init: function () {
            if ($(el).length) {
                Client.events();
            }
        },
        events: function () {

        },
        clientChat: function(){

        }
    }
}();