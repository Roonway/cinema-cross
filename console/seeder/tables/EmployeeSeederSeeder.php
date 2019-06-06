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
                'birthday' => $this->faker->date('Y-m-d', '-16 years'),
                'email' => "funcionario$employee@gmail.com",
                'cpf' => $this->faker->cpf(false),
                'street' => $this->faker->streetName,
                'number' => $this->faker->buildingNumber,
                'district' => $this->faker->citySuffix,
                'city' => $this->faker->city,
                'room_id' => $this->faker->numberBetween(1, DatabaseSeeder::ROOM_COUNT),
                'manager' => $this->faker->boolean ? ($this->faker->boolean) : false,
                'created_at' => $this->createdAt,
                'updated_at' => $this->updatedAt,

            ]);
        }, DatabaseSeeder::CLIENT_COUNT);
    }
}