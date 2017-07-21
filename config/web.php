<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'kiwdjfpj423ju9er-gsdfmpjP#3jpqwejrpwqj',
            'parsers' => [
            	'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => $db,
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
				[
					'class' => 'yii\rest\UrlRule',
					'pluralize' => false,
//					'controller' => 'api/v1',
					'controller' => ['books' => 'api/v1'],
					'prefix'     => 'api/v1',
					'extraPatterns' => [
						'GET list' => 'index',
						'GET by-id/<id:\d+>' => 'view',
						'POST update/<id:\d+>' => 'update',
//						'DELETE 
					]
				],
				'' => 'site/index',
				'/login' => 'site/login',
				'/logout' => 'site/logout',
				'/manager' => 'site/manager',
				'/manager/<model:\w+>' => '<model>/index',
				'/manager/<model:\w+>/<view:\w+>' => '<model>/<view>',
			],
		],
    ],
    'params' => $params,
	'modules' => [
		'api' => [
			'class' => 'app\modules\api\apiModule',
		],
	],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
