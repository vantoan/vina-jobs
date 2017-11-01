<?php
//phpinfo(); die;
const MAIL_HOST = 'mail.vina-jobs.com';
const MAIL_USERNAME = 'admin@vina-jobs.com';
const MAIL_PASS = "]W#Xg]8Pa-sb";
const MAIL_PORT = 25;

date_default_timezone_set("Asia/Bangkok");

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/config/web.php');

(new yii\web\Application($config))->run();
