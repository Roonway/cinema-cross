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
                'name' => $this->faker->name($this->faker->boolean ? 'male' : 'famale'),
                'district' => $this->faker->citySuffix,
                'price' => $this->faker->randomFloat(2,0, 999),

            ]);

        }, DatabaseSeeder::CLIENT_COUNT);
    }
}
