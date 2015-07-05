<?php

return [
    'dev' => [
        'setMysqlParams' => [
            'params' => [
                '%MYSQL_TCP_ADDR%' => '172.17.0.2',
                '%MYSQL_TCP_PORT%' => '3306',
                '%MYSQL_ENV_MYSQL_USER%' => 'oauth2',
                '%MYSQL_ENV_MYSQL_PASSWORD%' => 'LYp67sfzoId3EBGgRI7OAGlc',
                '%MYSQL_DATABASE%' => 'oauth2',
            ],
        ],
        'setWampRouterParams' => [
            'params' => [
                '%WAMP_TCP_ADDR%' => '172.17.0.1',
                '%WAMP_TCP_PORT%' => '8000',
            ]
        ],
        'setAuthClientParams' => [
            'params' => [
                '%FACEBOOK_CLIENT_ID%' => '208110949358725',
                '%FACEBOOK_CLIENT_SECRET%' => '9a31e4e360a1847c4ea39aa5e1253d79',
                '%TWITTER_CONSUMER_KEY%' => 'mlaijX6kWrTLa1EACEXAfbI6d',
                '%TWITTER_CONSUMER_SECRET%' => '86qfHghfBeR8yzqs0R9Lcz2yhIBNefm11if75Kyf3d83c7mo1R',
                '%GOOGLE_CLIENT_ID%' => '103973048697-d6nt4sjuuo92slrke6iiad02r6lb6vv7.apps.googleusercontent.com',
                '%GOOGLE_CLIENT_SECRET%' => 'wV0691H3pC351PWgzSptktbr',
            ]
        ]
    ],
];
