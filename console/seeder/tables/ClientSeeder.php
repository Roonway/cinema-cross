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
                'cpf' => $this->faker->cpf(false),
                'name' => $this->faker->name($this->faker->boolean ? 'male' : 'female'),
                'email' => $this->faker->email,
                'birthday' => $this->faker->date(),
                'street' => $this->faker->streetName,
                'district' => $this->faker->citySuffix,
                'city' => $this->faker->city,
                ''

            ]);

        }, DatabaseSeeder::CLIENT_COUNT);
    }
}
