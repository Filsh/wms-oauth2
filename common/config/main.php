<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => 'dektrium\rbac\components\DbManager',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'xxxxxx',
            'username' => 'xxxxxx',
            'password' => 'xxxxxx',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
        'wampRouter' => [
            'class' => 'filsh\wamp\components\Router',
            'host' => 'xxxxxx',
            'port' => 'xxxxxx',
            'realm' => 'realm'
        ]
    ],
];
