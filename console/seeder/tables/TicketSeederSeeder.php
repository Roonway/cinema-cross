<?php
namespace console\seeder\tables;
use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;


class TicketSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;
    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%ticket}}');
        $this->enableForeginKeyChecks();

        loop( function ($session) {

            loop( function ($ticket) use ($session){

                $this->generate();

                $this->insert('{{%ticket}}', [

                    'half-fare' => $this->faker->boolean,
                    'client_id' => $this->faker->numberBetween(1,DatabaseSeeder::CLIENT_COUNT),
                    'session_id' => $session,
                    'created_at' => $this->createdAt,
                ]);
            }, DatabaseSeeder::TICKET_COUNT);

        }, DatabaseSeeder::MOVIE_COUNT * DatabaseSeeder::ROOM_COUNT);


    }
}
