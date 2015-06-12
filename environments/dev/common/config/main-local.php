<?php
return [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=%MYSQL_TCP_ADDR%;port=%MYSQL_TCP_PORT%;dbname=%MYSQL_DATABASE%',
            'username' => '%MYSQL_ENV_MYSQL_USER%',
            'password' => '%MYSQL_ENV_MYSQL_PASSWORD%',
        ],
        'mailer' => [
            'useFileTransport' => true,
        ],
        'wampRouter' => [
            'host' => '%WAMP_TCP_ADDR%',
            'port' => '%WAMP_TCP_PORT%',
        ],
    ],
];
