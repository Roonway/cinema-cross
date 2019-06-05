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
        loop( function ($ticket) {

            $this->generate();

            $this->insert('{{%ticket}}', [

                'half-fare' => $this->faker->boolean,
            ]);
        }, DatabaseSeeder::CLIENT_COUNT);
    }
}
