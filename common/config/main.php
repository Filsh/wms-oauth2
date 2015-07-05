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
        ],
        'authClientCollection' => [
            'class'   => 'yii\authclient\Collection',
            'clients' => [
                'facebook' => [
                    'class'        => 'dektrium\user\clients\Facebook',
                    'clientId'     => 'xxxxxx',
                    'clientSecret' => 'xxxxxx',
                ],
                'twitter' => [
                    'class'             => 'dektrium\user\clients\Twitter',
                    'consumerKey'       => 'xxxxxx',
                    'consumerSecret'    => 'xxxxxx',
                ],
                'google' => [
                    'class'         => 'dektrium\user\clients\Google',
                    'clientId'      => 'xxxxxx',
                    'clientSecret'  => 'xxxxxx',
                ]
            ],
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
        ],
    ],
];
