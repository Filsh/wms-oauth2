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
                    'class'         => 'common\clients\Google',
                    'clientId'      => 'xxxxxx',
                    'clientSecret'  => 'xxxxxx',
                ]
            ],
        ],
        'i18n' => [
            'translations' => [
                'common' => [
                    'class' => 'yii\i18n\GettextMessageSource',
                    'sourceLanguage' => 'en-US',
                    'basePath' => '@common/messages',
                ]
            ]
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableRegistration' => false,
            'modelMap' => [
                'User' => \common\models\User::class,
                'Profile' => \common\models\Profile::class,
                'Account' => \common\models\Account::class
            ]
        ],
    ],
];
