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
        loop( function ($session) {

            $this->generate();

            $this->insert('{{%session}}', [
                'hour' => $this->faker->time(),
                'date' => $this->faker->date(),
            ]);
        }, DatabaseSeeder::CLIENT_COUNT);
    }
}