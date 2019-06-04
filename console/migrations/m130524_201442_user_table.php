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
            'employee_id' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $this->getDefaultTableOptions());

        $this->createIndex('idx-user-employee_id', '{{%user}}', 'employee_id');

        $this->addForeignKey('fk-user-employee_id', '{{%user}}', 'employee_id', '{{%employee}}', 'id', 'CASCADE', 'CASCADE');

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
