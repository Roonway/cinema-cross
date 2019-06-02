<?php

use yii\db\Migration;

/**
 * Class m190602_013243_room
 */
class m190602_013243_room extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room}}', [
            'id' => $this->primaryKey(),
            'seat_quant' => $this->integer()->notNull(),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%room}}');
    }



}