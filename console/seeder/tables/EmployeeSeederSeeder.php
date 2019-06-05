<?php
namespace console\seeder\tables;
use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;


class EmployeeSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;
    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%employee}}');
        $this->enableForeginKeyChecks();
        loop( function ($employee) {

            $this->generate();

            $this->insert('{{%employee}}', [

                'name' => $this->faker->name($this->faker->boolean ? 'male' : 'female'),
                'email' => $this->faker->email,
                'birthday' => $this->faker->dateTimeThisCentury(),
            ]);
        }, DatabaseSeeder::CLIENT_COUNT);
    }
}