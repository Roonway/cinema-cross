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

        $array = [250, 300, 450, 500, 650];

        loop( function ($room) use ($array) {

            $this->generate();

            $this->insert('{{%room}}', [
                'seat_quant' => $array[$this->faker->numberBetween(0,4)],
                'created_at' => $this->createdAt,
                'updated_at' => $this->updatedAt,
            ]);

        }, DatabaseSeeder::ROOM_COUNT);
    }
}
