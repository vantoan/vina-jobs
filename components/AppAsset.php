<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\components;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    /*public $css = [
        'web/css/all.min.css'
    ];*/
    public $css = [
        '/web/template/jobs/css/bootstrap-3.1.1.min.css',
        '/web/template/jobs/css/font-awesome.css',
        '/vendor/bower/iCheck/skins/all.css',
        '/vendor/bower/select2/dist/css/select2.min.css',

        '/web/template/jobs/css/style.css',
    ];
    /*public $js = [
        'web/js/all.min.js'
    ];*/
    public $js = [
        '/web/template/jobs/js/bootstrap.min.js',
        '/web/template/jobs/js/jquery.flexisel.js',
        '/web/template/jobs/js/jquery.wmuSlider.js',
        '/vendor/bower/iCheck/icheck.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js',

        '/vendor/bower/select2/dist/js/select2.min.js',

        '/web/js/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
