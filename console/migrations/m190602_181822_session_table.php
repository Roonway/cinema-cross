<?php

use yii\db\Migration;

/**
 * Class m190602_181822_session_table
 */
class m190602_181822_session_table extends Migration
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
            'movie_id' => $this->integer(),
            'room_id' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);


        $this->createIndex('idx-movie_id','{{%session}}','movie_id');
        $this->createIndex('idx-room_id','{{%session}}','room_id');



        $this->addForeignKey('fk-session-movie_id','{{%session}}','movie_id','{{%movie}}','id','CASCADE','CASCADE');
        $this->addForeignKey('fk-session-client_id','{{%session}}','room_id','{{%room}}','id','CASCADE','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%session}}');
    }


}
