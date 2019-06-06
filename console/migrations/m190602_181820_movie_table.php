<?php

use yii\db\Migration;

/**
 * Class m190603_005431_movie_table
 */
class m190602_181820_movie_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%movie}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'year' => $this->integer()->notNull(),
            'duration' => $this->integer(),
            'indicative_classify' => $this->integer(),
            'director_id' => $this->integer(),
            'genre_id' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        $this->createIndex('idx-movie-genre_id','{{%movie}}','genre_id');
        $this->createIndex('idx-movie-director_id','{{%movie}}','director_id');

        $this->addForeignKey('fk-movie-genre_id','{{%movie}}','genre_id','{{%genre}}','id','CASCADE','CASCADE');
        $this->addForeignKey('fk-movie-director_id','{{%movie}}','director_id','{{%director}}','id','CASCADE','CASCADE');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%movie}}');
    }


}
