<?php

namespace console\seeder\tables;

use Yii;
use console\seeder\TableSeeder;
use console\seeder\DatabaseSeeder;
use console\seeder\helpers\CreatedAtUpdatedAt;

class PhoneClientSeeder extends TableSeeder
{
    use CreatedAtUpdatedAt;

    function run()
    {
        $this->disableForeginKeyChecks();
        $this->truncateTable('{{%phone_client}}');
        $this->enableForeginKeyChecks();

        loop( function ($client) {

            loop( function ($phone) use ($client) {

                if ($this->faker->boolean){
                    $this->generate();

                    $this->insert('{{%phone_client}}', [
                        'client_id' => $client,
                        'phone' => $this->faker->cellphone(false),
                    ]);
                }
            }, DatabaseSeeder::PHONE_COUNT);
        }, DatabaseSeeder::CLIENT_COUNT);
    }
}
