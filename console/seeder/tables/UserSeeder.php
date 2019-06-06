<?php

namespace console\seeder\tables;

use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;

class UserSeeder extends TableSeeder{

    use CreatedAtUpdatedAt;

    public function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%user}}');
        $this->enableForeginKeyChecks();


        $names = ['Roney', 'Emanuel', 'Gregory'];

        foreach ($names as $name){
            $this->insert('{{%user}}', [
                'email' => "$name@gmail.com",
                'username' => $name,
                'auth_key' => Yii::$app->security->generateRandomString(),
                'password_hash' => Yii::$app->security->generatePasswordHash('admin'),
                'created_at' => time(),
                'updated_at' => time(),
            ]);
        }


        loop(function ($user) {

            $this->generate();

            $this->insert('{{%user}}', [
                'email' => "@gmail.com",
                'username' => "Gerente $user",
                'auth_key' => Yii::$app->security->generateRandomString(),
                'password_hash' => Yii::$app->security->generatePasswordHash('user'),
                'created_at' => $this->createdAt,
                'updated_at' => $this->updatedAt,
            ]);

        }, DatabaseSeeder::EMPLOYEE_COUNT);
    }
}

