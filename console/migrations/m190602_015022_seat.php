<?php

use yii\db\Migration;

/**
 * Class m190602_015022_seat
 */
class m190602_015022_seat extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%seat}}', [
            'id' => $this->primaryKey(),
            $this->addForeignKey('fk-seat-room_id', '{{%seat}}', 'seat_quant', '{{%room}}', 'id', 'CASCADE', 'CASCADE'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%seat}}');
    }

}
