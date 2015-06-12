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
        ]
    ],
];
