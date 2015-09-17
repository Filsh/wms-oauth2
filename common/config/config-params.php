<?php

return array_replace_recursive([
    /*************************** ALPHA OPTIONS ********************************/
    'alpha-router-realm' => [
        'module' => 'alpha',
        'name' => 'routerRealm',
        'label' => 'Router realm for alpha application',
        'value' => 'xxxxxx',
        'type' => \bupy7\config\Module::TYPE_INPUT,
        'language' => \bupy7\config\Module::LANGUAGE_ALL,
        'rules' => [
            ['required'],
            ['string', 'max' => 255],
        ]
    ],
    'alpha-common-domain' => [
        'module' => 'alpha',
        'name' => 'commonDomain',
        'label' => 'Common domain for user avatars',
        'value' => 'xxxxxx',
        'type' => \bupy7\config\Module::TYPE_INPUT,
        'language' => \bupy7\config\Module::LANGUAGE_ALL,
        'rules' => [
            ['required'],
            ['string', 'max' => 255],
        ]
    ],
], require('config-params-local.php'));