<?php

use yii\db\Migration;

/**
 * Class m190602_184454_sale_table
 */
class m190602_184454_sale_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->createTable('{{%sale}}',[
            'product_id' => $this->integer(),
            'client_id' => $this->integer(),
            'quantity' => $this->integer()->notNull(),
            'total_price' => $this->float(),
            'sale_date' => $this->dateTime()->notNull(),

            $this->addPrimaryKey('pk_sale_client_product','{{%sale}}',['client_id','product_id']),
            $this->addForeignKey('fk_sale_product_id','{{%sale}}','product_id','{{%product}}','id','CASCADE','CASCADE'),
            $this->addForeignKey('fk_sale_client_id','{{%sale}}','client_id','{{%client}}','id','CASCADE','CASCADE'),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sale}}');
    }


}
