<?php
namespace console\seeder\tables;
use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;


class SaleSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;
    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%sale}}');
        $this->enableForeginKeyChecks();
        loop( function ($sale) {

            $this->generate();

            $this->insert('{{%sale}}', [

                'quantity' => $this->faker->randomNumber(2),
                'total_price' => $this->faker->randomFloat(2, 0, 999),
                'sale_date' => $this->faker->dateTimeThisYear,

            ]);
        }, DatabaseSeeder::CLIENT_COUNT);
    }
}

