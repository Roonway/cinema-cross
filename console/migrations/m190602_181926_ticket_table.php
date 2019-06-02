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

            $this->addForeignKey('fk_ticket_client_id','{{%ticket}}','client_id','{{%client}}','id','CASCADE','CASCADE'),
            $this->addForeignKey('fk_ticket_session_id','{{%ticket}}','session_id','{{%session}}','id','CASCADE','CASCADE')

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ticket}}');
    }


}
