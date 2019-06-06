<?php
namespace console\seeder\tables;
use DateTime;
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

        $date = new DateTime('now');
        $yearNow = intval($date->format('Y'));

        loop( function ($movie) use ($yearNow) {

            $this->generate();

            $this->insert('{{%movie}}', [
                'title' => $this->faker->sentence($this->faker->numberBetween(1,5)),
                'year' => $this->faker->numberBetween(1950, $yearNow),
                'duration' => $this->faker->numberBetween(45,240),
                'indicative_classify' => $this->faker->numberBetween(1,6),
                'director_id' => $this->faker->numberBetween(1, DatabaseSeeder::DIRECTOR_COUNT),
                'genre_id' => $this->faker->numberBetween(1, DatabaseSeeder::GENRE_COUNT),
                'created_at' => $this->createdAt,
                'updated_at' => $this->updatedAt,
            ]);
        }, DatabaseSeeder::MOVIE_COUNT);
    }
}