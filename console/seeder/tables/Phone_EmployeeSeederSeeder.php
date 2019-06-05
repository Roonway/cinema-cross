<?php
namespace console\seeder\tables;
use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;


class Phone_EmployeeSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;
    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%phone_employee}}');
        $this->enableForeginKeyChecks();
        loop( function ($phone_employee) {

            $this->generate();

            $this->insert('{{%phone_employee}}', [

                'phone' => $this->faker->phoneNumber,


            ]);
        }, DatabaseSeeder::CLIENT_COUNT);
    }
}
