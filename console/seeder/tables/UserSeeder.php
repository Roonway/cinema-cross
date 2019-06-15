<?php

namespace console\seeder\tables;

use Yii;
use common\models\Employee;
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


        $names = ['Roney', 'Emanuel', 'Gregory', 'Professor'];

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



            $employees = Employee::find()->whereManager()->all();

            foreach ($employees as $employee){

                $this->generate();

                $this->insert('{{%user}}', [
                    'email' => $employee->email,
                    'username' => "Gerente $employee->id",
                    'auth_key' => Yii::$app->security->generateRandomString(),
                    'password_hash' => Yii::$app->security->generatePasswordHash($employee->cpf),
                    'employee_id' => $employee->id,
                    'created_at' => $this->createdAt,
                    'updated_at' => $this->updatedAt,
                ]);
            }



    }
}

