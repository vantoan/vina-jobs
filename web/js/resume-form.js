$(function () {
    ResumeForm.init();
});

var ResumeForm = function () {
    var resumeForm = '#resume-form';
    var networkHtml = $('.group-network').html();
    var experienceHtml = $('.group-experience').html();
    var educationHtml = $('.group-education').html();
    return {
        init: function () {
            if (_.isUndefined($(resumeForm))) {
                return false;
            }else{
                this.events();
            }
        },
        events: function () {
            ResumeForm.autoComplete();
            $('.row-network').on('click', '.add-more a', function(){
                $('.group-network').append(networkHtml);
                ResumeForm.setDefault();
            });
            $('.row-experience').on('click', '.add-more a', function(){
                $('.group-experience').append(experienceHtml);
            });
            $('.row-education').on('click', '.add-more a', function(){
                $('.group-education').append(educationHtml);
            });

            $('.row').on('click','.item a.close', function(e){
                $(this).closest('.item').remove();
                e.preventDefault();
            });
        },
        autoComplete: function () {
            TNService.getCallback('/ajax/load-tags', function(data){
                Common.addTagsForInput(data, $('.tag-input'));
            });
        }
    }
}();