<?php

use yii\db\Migration;

/**
 * Class m190603_002920_phone_client_table
 */
class m190603_002920_phone_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{phone_client}}', [
            'client_id' => $this->integer(),
            'phone' => $this->string(255)->unique()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),

        ]);

            $this->createIndex('idx-phone_client-client_id-phone','{{%phone_client}}',['client_id','phone']);
            $this->createIndex('idx-phone_client-client_id','{{%phone_client}}','client_id');



            $this->addPrimaryKey('pk-phone-client-phone-client_id','{{%phone_client}}',['client_id','phone']);
            $this->addForeignKey('fk-phone-client_id','{{%phone_client}}','client_id','{{%client}}','id','CASCADE','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{phone_client}}');
    }


}
