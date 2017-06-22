/*
 * $ grunt concat:onecss concat:onejs
 * $ grunt cssmin:mincss uglify:minjs
 *
 * $ grunt concat:adminonecss concat:adminonejs
 * $ grunt cssmin:adminmincss uglify:adminminjs
 * */
module.exports = function (grunt) {
    grunt.initConfig({
        concat: {
            onecss: {
                src: [
                    'web/template/taco/css/bootstrap.min.css',
                    'web/template/taco/css/fancybox/jquery.fancybox.css',
                    'web/template/taco/css/jcarousel.css',
                    'web/template/taco/css/flexslider.css',
                    'web/template/taco/css/style.css',
                    'web/template/taco/skins/default.css',

                    'vendor/bower/iCheck/skins/flat/green.css',
                    'vendor/bower/bootstrap-datepicker/css/build3.css',

                    /* Select2 */
                    'vendor/bower/select2/dist/css/select2.min.css',
                    /* daterangepicker */
                    'vendor/bower/bootstrap-daterangepicker/daterangepicker.css',

                    /* jQuery-Tags-Input-Plugin-with-Autocomplete-Support-Mab-Tag-Input/ */
                    'web/plugins/autocomplete-support-mab-tag-input/mab-jquery-taginput.css',

                    /* jQuery custom content scroller/ */
                    'vendor/bower/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css',

                    /* Fullcalendar */
                    '/vendor/bower/fullcalendar/dist/fullcalendar.min.css',

                    'web/css/site.css'
                ],
                dest: 'web/css/all.css'
            },
            onejs: {
                src: [
                    'vendor/bower/jquery/dist/jquery.js',
                    'web/template/taco/js/jquery.easing.1.3.js',
                    'web/template/taco/js/bootstrap.min.js',
                    'web/template/taco/js/jquery.fancybox.pack.js',
                    'web/template/taco/js/jquery.fancybox-media.js',
                    'web/template/taco/js/google-code-prettify/prettify.js',
                    'web/template/taco/js/portfolio/jquery.quicksand.js',
                    'web/template/taco/js/portfolio/setting.js',
                    'web/template/taco/js/jquery.flexslider.js',
                    'web/template/taco/js/animate.js',
                    'web/template/taco/js/custom.js',

                    //'vendor/bower/moment/min/moment.min.js',
//        'vendor/bower/Flot/examples/shared/jquery-ui/jquery-ui.min.js',
                    'vendor/bower/underscore/underscore.js',
                    /*iCheck*/
//        'vendor/bower/iCheck/icheck.min.js',
                    /* Select2 */
                    'vendor/bower/select2/dist/js/select2.full.min.js',
                    /**/
                    'vendor/bower/bootstrap-datepicker/js/bootstrap-datepicker.js',
                    'vendor/bower/bootstrap-datepicker/js/locales/bootstrap-datepicker.en-AU.js',
                    /* daterangepicker */
                    'web/js/moment/moment.min.js',
                    'vendor/bower/bootstrap-daterangepicker/daterangepicker.js',

                    /* jQuery-Tags-Input-Plugin-with-Autocomplete-Support-Mab-Tag-Input/ */
                    'web/plugins/autocomplete-support-mab-tag-input/lib/js/typeahead.bundle.min.js',
                    'web/plugins/autocomplete-support-mab-tag-input/mab-jquery-taginput.js',

                    /* jQuery custom content scroller/ */
//        'vendor/bower/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',

                    /* Fullcalendar */
//        '/vendor/bower/fullcalendar/dist/fullcalendar.min.js',
//        '/vendor/bower/fullcalendar/dist/locale-all.js',
//        '/web/js/profile/event.js',


//        'web/js/plugins/plugins.js',

                    'web/plugins/tinymce/js/tinymce/tinymce.min.js',

                    'web/js/service.js',
                    'web/js/common.js',
                    'web/js/site-ajax.js',
                    'web/js/resume-form.js',
                    'web/js/site.js'
                ],
                dest: 'web/js/all.js'
            },

            adminonecss: {
                src: [
                    'vendor/bower/bootstrap/dist/css/bootstrap.min.css',
                    'vendor/bower/font-awesome/css/font-awesome.min.css',
                    'vendor/bower/nprogress/nprogress.css',
                    'vendor/bower/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css',
                    'web/plugins/jquery-confirm-v3.2.0/css/jquery-confirm.css',
                    //'vendor/bower/iCheck/skins/flat/green.css',
                    //iCheck
                    //'web/plugins/icheck/skins/square/square.css',
                    'web/plugins/icheck/skins/square/green.css',
                    'web/plugins/icheck/skin/all.css',

                    //Select2
                    'vendor/bower/select2/dist/css/select2.min.css',
                    //Fullcalendar
                    'web/plugins/fullcalendar-3.3.1/fullcalendar.min.css',

                    //eonasdan-bootstrap-datetimepicker
                    'vendor/bower/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',

                    //'web/less/admin/widget-chat.css',

                    'web/build/css/custom.min.css',
                    'web/css/admin.css'
                ],
                dest: 'web/css/all.css'
            },
            adminonejs: {
                src: [
                    // Bootstrap
                    'web/js/common.js',
                    'web/js/service.js',
                    'vendor/bower/bootstrap/dist/js/bootstrap.min.js',
                    'web/js/moment/moment.min.js',
                    //FastClick
                    'vendor/bower/fastclick/lib/fastclick.js',
                    //NProgress
                    'vendor/bower/nprogress/nprogress.js',
                    //Chart
                    'vendor/bower/Chart.js/dist/Chart.min.js',
                    //gauge
//        'vendor/bower/gauge.js/dist/gauge.min.js',
                    //bootstrap-progressbar
                    'vendor/bower/bootstrap-progressbar/bootstrap-progressbar.min.js',
                    //iCheck
                    'web/plugins/icheck/icheck.min.js',
                    //Skycons
                    //'vendor/bower/skycons/skycons.js',
                    //Flot
                    //'vendor/bower/flot/jquery.flot.js',
                    //'vendor/bower/flot/jquery.flot.pie.js',
                    //'vendor/bower/flot/jquery.flot.time.js',
                    //'vendor/bower/flot/jquery.flot.stack.js',
                    //'vendor/bower/flot/jquery.flot.resize.js',
                    //Flot plugins
                    //'vendor/bower/flot.orderbars/js/jquery.flot.orderBars.js',
                    //'vendor/bower/flot-spline/js/jquery.flot.spline.min.js',
                    //'vendor/bower/flot.curvedlines/curvedLines.js',
                    //DateJS
                    'vendor/bower/DateJS/build/date.js',
                    //JQVMap
//        'vendor/bower/jqvmap/dist/jquery.vmap.js',
//        'vendor/bower/jqvmap/dist/maps/jquery.vmap.world.js',
                    'vendor/bower/jqvmap/examples/js/jquery.vmap.sampledata.js',

                    //bootstrap-daterangepicker
                    'web/js/datepicker/daterangepicker.js',
                    //Scroll
                    'vendor/bower/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',
                    //Custom Theme Scripts
                    'web/build/js/custom.min.js',
                    //Select2
                    'vendor/bower/select2/dist/js/select2.full.min.js',

                    'web/plugins/jquery-confirm-v3.2.0/js/jquery-confirm.js',
                    'vendor/bower/underscore/underscore.js',

                    /* CkEditor */
                    //'vendor/bower/ckeditors/ckeditor/ckeditor.js',
                    /* CkFinder */
                    //'vendor/bower/ckeditors/ckfinder/ckfinder.js?type=Images',

                    //eonasdan-bootstrap-datetimepicker
                    'vendor/bower/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',

                    //Fullcalendar
                    'web/plugins/fullcalendar-3.3.1/fullcalendar.min.js',
                    'vendor/bower/fullcalendar/dist/locale-all.js',

                    'web/plugins/autoNumeric-master/dist/autoNumeric.min.js',
                    'web/js/admin/spend-managementindex-index.js',
                    'web/js/admin/widget/task.js',
                    'web/js/admin/event.js',

                    //'web/js/admin/widget/chat.js',

                    'web/js/admin/admin-ajax.js',
                    'web/js/admin/admin.js',
                    'web/js/admin/admin-tona.js'
                ],
                dest: 'web/js/all.js'
            }
        },
        cssmin: {
            mincss: {
                src: 'web/css/all.css',
                dest: 'web/css/all.min.css'
            }
        },
        uglify: {
            minjs: {
                src: 'web/js/all.js',
                dest: 'web/js/all.min.js'
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('default', ['concat', 'cssmin', 'uglify']);
};