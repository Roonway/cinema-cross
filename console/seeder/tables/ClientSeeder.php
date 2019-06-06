<?php

namespace console\seeder\tables;

use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;

class ClientSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;

    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%client}}');
        $this->enableForeginKeyChecks();

        loop( function ($client) {

            $this->generate();

            $this->insert('{{%client}}', [
                'name' => $this->faker->name($this->faker->boolean ? 'male' : 'female'),
                'email' => $this->faker->email,
                'birthday' => $this->faker->date('Y-m-d', '-5 years'),
                'street' => $this->faker->streetName,
                'number' => $this->faker->buildingNumber,
                'district' => $this->faker->citySuffix,
                'city' => $this->faker->city,
                'created_at' => $this->createdAt,
                'updated_at' => $this->updatedAt,

            ]);

        }, DatabaseSeeder::CLIENT_COUNT);
    }
}
