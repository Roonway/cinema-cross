<?php

use yii\i18n\Formatter;
use yii\web\UrlManager;

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'name' => 'Cinema Planet',
    'language' => 'pt-BR',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'formatter' => [
            'class' => Formatter::class,
            'dateFormat' => 'php:d/m/Y',
            'datetimeFormat' => 'php:d/m/Y H:i:s',
            'timeFormat' => 'php:H:i:s',
            'decimalSeparator' => ',',
            'thousandSeparator' => '.',
            'currencyCode' => 'BRL',
            'locale' => 'pt_BR',
            'defaultTimeZone' => 'America/Recife',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'backendUrlManager' => [
            'class' => UrlManager::class,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
];
