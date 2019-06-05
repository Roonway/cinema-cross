<?php

namespace console\seeder\tables;

use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;

class Phone_ClientSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;

    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%phone_client}}');
        $this->enableForeginKeyChecks();

        loop( function ($phone_client) {

            $this->generate();

            $this->insert('{{%phone_client}}', [
                'phone' => $this->faker->phoneNumber,


            ]);

        }, DatabaseSeeder::CLIENT_COUNT);
    }
}
