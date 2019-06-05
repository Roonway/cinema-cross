<?php

namespace console\seeder\tables;

use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;

class RoomSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;

    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%room}}');
        $this->enableForeginKeyChecks();

        loop( function ($room) {

            $this->generate();

            $this->insert('{{%room}}', [
                'seat_quant' => $this->faker->randomNumber(2),


            ]);

        }, DatabaseSeeder::CLIENT_COUNT);
    }
}
