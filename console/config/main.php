<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'modules' => [
        'wamp' => [
            'class' => 'filsh\wamp\Module',
            'wampRouter' => 'wampRouter',
            'runnerMap' => [
                \filsh\wms\wamplocator\Locator::GET_IDENTITY_BY_ID => \console\runners\identity\Id::class,
                \filsh\wms\wamplocator\Locator::GET_IDENTITY_BY_ACCESS_TOKEN => \console\runners\identity\AccessToken::class,
                \filsh\wms\wamplocator\Locator::GET_IDENTITY_BY_CREDENTIALS => \console\runners\identity\Credentials::class,
                
                \filsh\wms\wamplocator\Locator::CREATE_IDENTITY => \console\runners\identity\Create::class,
                
                \filsh\wms\wamplocator\Locator::GET_ACCOUNT_BY_ID => \console\runners\account\Id::class,
                
                \filsh\wms\wamplocator\Locator::GET_USER_BY_IDENTITY => \console\runners\user\Identity::class,
            ]
        ]
    ],
    'params' => $params,
];
