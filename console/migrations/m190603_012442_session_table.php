<?php

use yii\db\Migration;

/**
 * Class m190603_012442_session_table
 */
class m190603_012442_session_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%session}}', [
            'id' => $this->primaryKey(),
            'hour' => $this->time(4),
            'date' => $this->date(),
            'movie_id' => $this->addForeignKey('fk_session_movie_id','{{%session}}','movie_id','{{%movie}}','id','CASCADE','CASCADE'),
            'room_id' => $this->addForeignKey('fk_session_client_id','{{%session}}','room_id','{{%room}}','id','CASCADE','CASCADE'),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%session}}');
    }


}
