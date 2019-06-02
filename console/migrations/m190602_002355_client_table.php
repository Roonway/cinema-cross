<?php

use yii\db\Migration;

/**
 * Class m190602_002355_client_table
 */
class m190602_002355_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client}}', [
            'id' => $this->primaryKey(),
            'cpf' => $this->string(11)->notNull()->unique(),
            'name' => $this->string(255),
            'email' => $this->string(255)->unique(),
            'birthday' => $this->date(),
            'street' => $this->string(255),
            'district' => $this->string(50),
            'city' => $this->string(50)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client}}');
    }

}
