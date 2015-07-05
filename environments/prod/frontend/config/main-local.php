<?php
return [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
        'urlManager' => [
            'rules' => [
                'http://www.lookinday.com/connect/account' => 'connect/account',
                'http://www.lookinday.com/connect/success' => 'connect/success',
                'http://www.lookinday.com/connect/cancel' => 'connect/cancel',
            ]
        ],
    ],
];
