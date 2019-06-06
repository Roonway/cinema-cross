<?php

namespace console\seeder\tables;

use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;
use console\seeder\TableSeeder;


class SaleSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;

    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%sale}}');
        $this->enableForeginKeyChecks();

        loop(function ($product) {

            loop(function ($client) use ($product) {

                $this->generate();

                if ($this->faker->boolean) {

                    $amount = $this->faker->numberBetween(1, 99);

                    $this->insert('{{%sale}}', [
                        'product_id' => $product,
                        'client_id' => $client,
                        'quantity' => $amount,
                        'total_price' => $this->faker->randomFloat(2, 0, 99) * $amount,
                        'sale_date' => $this->faker->date('Y-m-d'),
                        'created_at' => $this->createdAt,
                    ]);
                }
            }, DatabaseSeeder::CLIENT_COUNT);

        }, DatabaseSeeder::PRODUCT_COUNT);
    }
}

