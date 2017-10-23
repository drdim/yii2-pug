<?php
/**
 * main.php
 * @author Roman Revin http://phptime.ru
 */

$baseDir = realpath(__DIR__ . '/..');

return [
    'id' => 'testapp',
    'basePath' => $baseDir,
    'aliases' => [
        '@app' => $baseDir,
        '@runtime' => $baseDir . '/runtime',
    ],
    'components' => [
        'view' => [
            'renderers' => [
                'pug' => [
                    'class' => 'drdim\\yii\\pug\\ViewRenderer',
                    'filters' => [
                        'escaped' => 'drdim\\yii\\pug\\tests\\unit\\filters\\EscapedFilter'
                    ],
                ],
            ],
        ],
    ],
];