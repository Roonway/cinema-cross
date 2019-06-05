<?php
namespace console\seeder\tables;
use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;


class GenreSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;
    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%genre}}');
        $this->enableForeginKeyChecks();
        loop( function ($genre) {

            $this->generate();

            $this->insert('{{%genre}}', [

                'category' => $this->faker->randomNumber(1),
            ]);
        }, DatabaseSeeder::CLIENT_COUNT);
    }
}