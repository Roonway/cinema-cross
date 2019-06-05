<?php

use yii\db\Migration;

/**
 * Class m190603_004412_product_table
 */
class m190603_004412_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{product}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(255)->unique(),
            'description' => $this->text(),
            'unit_price' => $this->float(2),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{product}}');
    }


}
