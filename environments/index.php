<?php
/**
 * The manifest of files that are local to specific environment.
 * This file returns a list of environments that the application
 * may be installed under. The returned data must be in the following
 * format:
 *
 * ```php
 * return [
 *     'environment name' => [
 *         'path' => 'directory storing the local files',
 *         'skipFiles'  => [
 *             // list of files that should only copied once and skipped if they already exist
 *         ],
 *         'setWritable' => [
 *             // list of directories that should be set writable
 *         ],
 *         'setExecutable' => [
 *             // list of files that should be set executable
 *         ],
 *         'setCookieValidationKey' => [
 *             // list of config files that need to be inserted with automatically generated cookie validation keys
 *         ],
 *         'createSymlink' => [
 *             // list of symlinks to be created. Keys are symlinks, and values are the targets.
 *         ],
 *     ],
 * ];
 * ```
 */
require(dirname(__DIR__) . '/vendor/autoload.php');

return yii\helpers\ArrayHelper::merge(
    [
        'dev' => [
            'path' => 'dev',
            'setWritable' => [
                'backend/runtime',
                'backend/web/assets',
                'frontend/runtime',
                'frontend/web/assets',
            ],
            'setExecutable' => [
                'yii',
                'tests/codeception/bin/yii',
            ],
            'setCookieValidationKey' => [
                'backend/config/main-local.php',
                'frontend/config/main-local.php',
            ],
            'setMysqlParams' => [
                'paths' => [
                    'common/config/main-local.php'
                ],
                'params' => [],
            ],
            'setWampRouterParams' => [
                'paths' => [
                    'common/config/main-local.php'
                ],
                'params' => [],
            ],
            'setAuthClientParams' => [
                'paths' => [
                    'common/config/main-local.php'
                ],
                'params' => [],
            ],
            'setSandboxParams' => [
                'paths' => [
                    'common/config/main-local.php'
                ],
                'params' => [],
            ],
            'setConfigParams' => [
                'paths' => [
                    'common/config/config-params-local.php'
                ],
                'params' => [],
            ],
        ],
        'prod' => [
            'path' => 'prod',
            'setWritable' => [
                'backend/runtime',
                'backend/web/assets',
                'frontend/runtime',
                'frontend/web/assets',
            ],
            'setExecutable' => [
                'yii',
            ],
            'setCookieValidationKey' => [
                'backend/config/main-local.php',
                'frontend/config/main-local.php',
            ],
            'setMysqlParams' => [
                'paths' => [
                    'common/config/main-local.php'
                ],
                'params' => [],
            ],
            'setWampRouterParams' => [
                'paths' => [
                    'common/config/main-local.php'
                ],
                'params' => [],
            ],
            'setAuthClientParams' => [
                'paths' => [
                    'common/config/main-local.php'
                ],
                'params' => [],
            ],
            'setSandboxParams' => [
                'paths' => [
                    'common/config/main-local.php'
                ],
                'params' => [],
            ],
            'setConfigParams' => [
                'paths' => [
                    'common/config/config-params-local.php'
                ],
                'params' => [],
            ],
        ],
    ],
    require(__DIR__ . '/index-local.php')
);
