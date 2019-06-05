<?php
namespace console\seeder\tables;
use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;


class DirectorSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;
    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%director}}');
        $this->enableForeginKeyChecks();
        loop( function ($director) {

            $this->generate();

            $this->insert('{{%director}}', [

                'name' => $this->faker->name($this->faker->boolean ? 'male' : 'female'),
            ]);
        }, DatabaseSeeder::CLIENT_COUNT);
    }
}