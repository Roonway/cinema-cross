<?php

use common\models\User;
use kartik\datecontrol\Module as DateControlModule;
use kartik\grid\Module;
use yii\i18n\Formatter;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'gridview' => [
            'class' => Module::class,
            // enter optional module parameters below - only if you need to
            // use your own export download action or custom translation
            // message source
            // 'downloadAction' => 'gridview/export/download',
            // 'i18n' => []
        ],
        'datecontrol' => [
            'class' => DateControlModule::class,
            'displaySettings' => [
                DateControlModule::FORMAT_DATE => 'dd/MM/yyyy',
                DateControlModule::FORMAT_TIME => 'HH:mm',
                DateControlModule::FORMAT_DATETIME => 'dd/MM/yyyy HH:mm',
            ],
            'saveSettings' => [
                DateControlModule::FORMAT_DATE => 'php:Y-m-d', // saves as unix timestamp
                DateControlModule::FORMAT_TIME => 'php:H:i:s',
                DateControlModule::FORMAT_DATETIME => 'php:Y-m-d H:i:s',
            ],
            'displayTimezone' => 'America/Recife',
            'saveTimezone' => 'UTC',
            'autoWidget' => true,
            'ajaxConversion' => true,
            'autoWidgetSettings' => [
                DateControlModule::FORMAT_DATE => ['type' => 2, 'pluginOptions' => ['autoclose' => true]],
                DateControlModule::FORMAT_DATETIME => [], // setup if needed
                DateControlModule::FORMAT_TIME => [], // setup if needed
            ],
        ],
    ],
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
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => User::class,
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => require('routes.php'),
        ],
    ],
    'params' => $params,
];
