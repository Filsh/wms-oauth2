<?php

return array_replace_recursive([
    /*************************** ALPHA OPTIONS ********************************/
    'alpha-common-domain' => [
        'module' => 'alpha',
        'name' => 'commonDomain',
        'label' => 'Common domain for user avatars',
        'value' => 'xxxxxx',
        'type' => \bupy7\config\Module::TYPE_INPUT,
        'language' => \bupy7\config\Module::LANGUAGE_ALL,
        'rules' => [
            ['string', 'max' => 255],
        ]
    ],
], require('config-params-local.php'));