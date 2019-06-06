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

        loop( function ($employee) {

            loop( function ($phone) use ($employee) {

                if ($this->faker->boolean){
                    $this->generate();

                    $this->insert('{{%phone_client}}', [
                        'client_id' => $employee,
                        'phone' => $this->faker->cellphone(false),
                    ]);
                }
            }, DatabaseSeeder::PHONE_COUNT);
        }, DatabaseSeeder::EMPLOYEE_COUNT);
    }
}
