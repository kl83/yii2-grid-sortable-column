<?php
return [
    'id' => 'Column test',
    'language' => 'ru-RU',
    'basePath' => __DIR__,
    'vendorPath' => __DIR__ . '/../../vendor',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
    ],
    'components' => [
        'request' => [
            'enableCookieValidation' => false,
        ],
    ],
];
