<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=database.ccdslczvlhfu.us-east-1.rds.amazonaws.com;dbname=cinema',
            'username' => 'cinema',
            'password' => 'cinema',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
        'backendUrlManager' => [
            'baseUrl' => 'http://cinemacross.localhost/'
        ],
    ],
];
