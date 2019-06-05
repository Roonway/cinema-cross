<?php

use yii\db\Migration;

/**
 * Class m190603_005431_movie_table
 */
class m190603_005431_movie_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%movie}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'year' => $this->integer(),
            'duration' => $this->time(4),
            'indicative_classify' => $this->integer(),
            'director_id' => $this->addForeignKey('fk_movie_director_id','{{%movie}}','director_id','{{%director}}','id','CASCADE','CASCADE'),
            'genre_id' => $this->addForeignKey('fk_movie_genre_id','{{%genre}}','genre_id','{{%genre}}','id','CASCADE','CASCADE'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%movie}}');
    }


}
