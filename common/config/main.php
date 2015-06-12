<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
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
            'class' => 'filsh\wamprouter\WampRouter',
            'host' => 'xxxxxx',
            'port' => 'xxxxxx',
            'realm' => 'realm'
        ],
        'wampLocator' => [
            'class' => 'filsh\yii2\runner\RunnerComponent',
            'runners' => []
        ]
    ],
];
