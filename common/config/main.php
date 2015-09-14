<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => \dektrium\rbac\components\DbManager::class,
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'xxxxxx',
            'username' => 'xxxxxx',
            'password' => 'xxxxxx',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => \yii\swiftmailer\Mailer::class,
            'viewPath' => '@common/mail',
        ],
        'wampRouter' => [
            'class' => \filsh\wamp\components\Router::class,
            'host' => 'xxxxxx',
            'port' => 'xxxxxx',
            'realm' => 'realm'
        ],
        'wampLocator' => [
            'class' => \filsh\wms\wamplocator\Locator::class,
            'wampRouter' => 'wampRouter'
        ],
        'authClientCollection' => [
            'class'   => \yii\authclient\Collection::class,
            'clients' => [
                'facebook' => [
                    'class'        => \dektrium\user\clients\Facebook::class,
                    'clientId'     => 'xxxxxx',
                    'clientSecret' => 'xxxxxx',
                ],
                'twitter' => [
                    'class'             => \dektrium\user\clients\Twitter::class,
                    'consumerKey'       => 'xxxxxx',
                    'consumerSecret'    => 'xxxxxx',
                ],
                'google' => [
                    'class'         => \common\clients\Google::class,
                    'clientId'      => 'xxxxxx',
                    'clientSecret'  => 'xxxxxx',
                ]
            ],
        ],
        'i18n' => [
            'translations' => [
                'common' => [
                    'class' => \yii\i18n\GettextMessageSource::class,
                    'sourceLanguage' => 'en-US',
                    'basePath' => '@common/messages',
                ]
            ]
        ],
    ],
    'modules' => [
        'user' => [
            'class' => \dektrium\user\Module::class,
            'enableRegistration' => false,
            'modelMap' => [
                'User' => \common\models\User::class,
                'Profile' => \common\models\Profile::class,
                'Account' => \common\models\Account::class
            ]
        ],
    ],
];
