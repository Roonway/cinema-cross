<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use console\seeder\DatabaseSeeder;

class SeederController extends Controller
{

    /**
     * @var string the default command action.
     */
    public $defaultAction = 'seed';

    public function actionSeed($name = null)
    {
        if ($name) {
            $seederClass = "console\\seeder\\tables\\{$name}Seeder";
            if (class_exists($seederClass)) {
                (new $seederClass)->run();
            } else {
                $this->stdout("Class {$seederClass} not exists");
            }
        } else {
            (new DatabaseSeeder())->run();
        }
    }

    public function actionCreate($name, $override = false)
    {
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'seeder' . DIRECTORY_SEPARATOR . 'tables' . DIRECTORY_SEPARATOR . $name . 'Seeder.php';

        if ($override || !file_exists($file)) {
            fopen($file, 'w');
            $this->stdout('File ' . basename($file) . ' created');
        } else {
            $this->stderr('Error: file ' . basename($file) . ' already exists');
        }
    }

    public function options($actionID)
    {
        switch ($actionID) {
            case 'create':
                return [
                    'n' => 'name'
                ];
        };
        return [];
    }


}