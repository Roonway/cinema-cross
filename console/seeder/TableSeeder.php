<?php

namespace console\seeder;

use Yii;
use yii\db\Migration;
use Faker\Factory;
use Faker\Provider\pt_BR\Address;
use Faker\Provider\pt_BR\Company;
use Faker\Provider\pt_BR\Person;
use Faker\Provider\pt_BR\PhoneNumber;

/*
 *  Qualquer dúvida quanto ao Faker acessar o https://github.com/fzaninotto/Faker
 */


abstract class TableSeeder extends Migration
{
    /**
     * @var \Faker\Generator
     */
    public $faker;

    public function init()
    {
        parent::init();
        $this->faker = Factory::create();
        $this->faker->addProvider(new Address($this->faker));
        $this->faker->addProvider(new Company($this->faker));
        $this->faker->addProvider(new Person($this->faker));
        $this->faker->addProvider(new PhoneNumber($this->faker));
    }

    abstract function run();

    /**
     * @throws \yii\db\Exception
     * @throws \yii\base\NotSupportedException
     */
    public function disableForeginKeyChecks()
    {
        Yii::$app->db->createCommand()->checkIntegrity(false)->execute();
    }

    /**
     * @throws \yii\db\Exception
     * @throws \yii\base\NotSupportedException
     */
    public function enableForeginKeyChecks()
    {
        Yii::$app->db->createCommand()->checkIntegrity(true)->execute();
    }
}