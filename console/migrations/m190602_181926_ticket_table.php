<?php

use yii\db\Migration;

/**
 * Class m190602_181926_ticket_table
 */
class m190602_181926_ticket_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ticket}}',[
            'id' => $this->primaryKey(),
            'half-fare' => $this->boolean(),
            'client_id' => $this->integer(),
            'session_id' => $this->integer(),
            'created_at' => $this->integer()->notNull(),

        ]);
        $this->createIndex('idx-ticket-client_id', '{{%ticket}}', 'client_id');
        $this->createIndex('idx-ticket-session_id', '{{%ticket}}', 'session_id');

        $this->addForeignKey('fk-ticket-client_id','{{%ticket}}','client_id','{{%client}}','id','CASCADE','CASCADE');
        $this->addForeignKey('fk-ticket-session_id','{{%ticket}}','session_id','{{%session}}','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ticket}}');
    }


}
