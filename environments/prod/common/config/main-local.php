<?php
return [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=%DB_HOST%;port=%DB_PORT%;dbname=%DB_NAME%',
            'username' => '%DB_USER%',
            'password' => '%DB_PASS%'
        ],
        'routerCollection' => [
            'routers' => [
                'alpha' => [
                    'host' => '%WAMP_HOST%',
                    'port' => '%WAMP_PORT%',
                ]
            ]
        ],
        'configManager' => [
            'rules' => [
                'alpha' => [
                    'include' => '%ALPHA_SANDBOX_INCLUDE_PATTERN%',
                    'exclude' => '%ALPHA_SANDBOX_EXCLUDE_PATTERN%'
                ]
            ]
        ],
        'authClientCollection' => [
            'clients' => [
                'facebook' => [
                    'clientId'      => '%ALPHA_FACEBOOK_CLIENT_ID%',
                    'clientSecret'  => '%ALPHA_FACEBOOK_CLIENT_SECRET%',
                ],
                'twitter' => [
                    'consumerKey'       => '%ALPHA_TWITTER_CONSUMER_KEY%',
                    'consumerSecret'    => '%ALPHA_TWITTER_CONSUMER_SECRET%',
                ],
                'google' => [
                    'clientId'      => '%ALPHA_GOOGLE_CLIENT_ID%',
                    'clientSecret'  => '%ALPHA_GOOGLE_CLIENT_SECRET%',
                ]
            ],
        ],
    ],
];
