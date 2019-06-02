<?php

use console\migrations\base\Migration;

class m130524_201442_user_table extends Migration
{

    public function up()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $this->getDefaultTableOptions());

        $names = ['Roney', 'Emanuel', 'Gregory'];

        foreach ($names as $name){
            $this->insert('{{%user}}', [
                'email' => "$name@gmail.com",
                'username' => $name,
                'auth_key' => Yii::$app->security->generateRandomString(),
                'password_hash' => Yii::$app->security->generatePasswordHash('user'),
                'created_at' => time(),
                'updated_at' => time(),
            ]);
        }

    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
