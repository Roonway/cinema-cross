<?php
namespace console\seeder\tables;
use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;


class MovieSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;
    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%movie}}');
        $this->enableForeginKeyChecks();
        loop( function ($movie) {

            $this->generate();

            $this->insert('{{%movie}}', [
                'title' => $this->faker->text(20),
                'year' => $this->faker->year,
            ]);
        }, DatabaseSeeder::CLIENT_COUNT);
    }
}