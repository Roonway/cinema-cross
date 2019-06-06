<?php

use console\migrations\base\Migration;

class m190604_201442_user_table extends Migration
{

    public function up()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'email' => $this->string(255)->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'employee_id' => $this->integer()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $this->getDefaultTableOptions());

        $this->createIndex('idx-user-employee_id', '{{%user}}', 'employee_id');

        $this->addForeignKey('fk-user-employee_id', '{{%user}}', 'employee_id', '{{%employee}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
