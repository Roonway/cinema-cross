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
            'email' =>
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
