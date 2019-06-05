<?php

namespace console\seeder\tables;

use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;

class ProductSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;

    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%product}}');
        $this->enableForeginKeyChecks();

        loop( function ($product) {

            $this->generate();

            $this->insert('{{%product}}', [
                'name' => $this->faker->name,
                'description' => $this->faker->text(30),
                'unit_price' => $this->faker->randomFloat(2,0, 999),

            ]);

        }, DatabaseSeeder::CLIENT_COUNT);
    }
}
