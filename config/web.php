<?php

$params = require(__DIR__ . '/params.php');
$rule = require(__DIR__ . '/routes.php');
$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'forceCopy' => true,
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'google' => [
                    'class' => 'yii\authclient\clients\Google',
                    'clientId' => '835202725290-6h2tmgc9kh1e8fjog0lcvta9gttt0n0b.apps.googleusercontent.com',
                    'clientSecret' => 'DJrk2vYAiTgPDG0512L3a3tU',
                ],
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
                    'clientId' => '592988894149611',
                    'clientSecret' => 'c081d2c7c8d11c94a183dbfcc435ca0b',
                    'attributeNames' => ['name', 'email', 'first_name', 'last_name'],
                ],
                'twitter' => [
                    'class' => 'yii\authclient\clients\Twitter',
                        'attributeParams' => [
                            'include_email' => 'true'
                        ],
                    'consumerKey' => 'KQ3PQvbdCahcywwd5OXr0eftp',
                    'consumerSecret' => 'SBUUIMqmITWPYFiqFUaN5a3N1KF3b1YGFH37jHfbniVQalfPes',
                ],
                // etc.
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'dv4f567b8f9d0g',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\Users',
            'enableAutoLogin' => false,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mail.xaydungtaco.com',
                'username' => 'system@xaydungtaco.com',
                'password' => 'system123',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),

        'urlManager' => [
            'showScriptName' => false,
            'enablePrettyUrl' => true,
            'rules' => $rule
        ],

    ],
    'defaultRoute' => 'site/index',
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.*', $_SERVER['REMOTE_ADDR']],
    ];
}

return $config;
