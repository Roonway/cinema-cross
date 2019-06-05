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

            $this->addPrimaryKey('pk_phone_client_phone_client_id','{{%phone_client}}',['client_id','phone']),
            $this->addForeignKey('fk_phone_client_id','{{%phone_client}}','client_id','{{%client}}','id','CASCADE','CASCADE'),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{phone_client}}');
    }


}
