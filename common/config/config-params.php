<?php

return array_replace_recursive([
    /***************************DEFAULT OPTIONS********************************/
    'common-domain-default' => [
        'module' => 'default',
        'name' => 'commonDomain',
        'label' => 'Common domain for user avatars',
        'value' => null,
        'type' => \bupy7\config\Module::TYPE_INPUT,
        'language' => \bupy7\config\Module::LANGUAGE_ALL,
        'rules' => [
            ['string', 'max' => 255],
        ]
    ],
    /**************************CUSTOM OPTIONS*******************************/
    'common-domain-1' => [
        'module' => null,
        'name' => 'commonDomain',
        'label' => 'Common domain for user avatars',
        'value' => null,
        'type' => \bupy7\config\Module::TYPE_INPUT,
        'language' => \bupy7\config\Module::LANGUAGE_ALL,
        'rules' => [
            ['string', 'max' => 255],
        ]
    ],
], require('config-params-local.php'));