<?php
namespace console\seeder\tables;
use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;


class SessionSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;
    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%session}}');
        $this->enableForeginKeyChecks();

        loop (function ($movie) {

            loop (function ($room) use ($movie) {


                    $this->generate();

                    $this->insert('{{%session}}', [
                        'hour' => $this->faker->time(),
                        'date' => $this->faker->date('Y-m-d', 'now'),
                        'movie_id' => $movie,
                        'room_id' => $room,
                        'created_at' => $this->createdAt,
                    ]);

            }, DatabaseSeeder::ROOM_COUNT);

        }, DatabaseSeeder::MOVIE_COUNT);


    }
}