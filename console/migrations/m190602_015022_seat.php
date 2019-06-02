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
            'room_id' => $this->integer(),
            $this->addForeignKey('fk-seat-room_id', '{{%seat}}', 'room_id', '{{%room}}', 'id', 'CASCADE', 'CASCADE'),
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
