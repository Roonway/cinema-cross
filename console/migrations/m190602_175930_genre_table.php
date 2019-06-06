<?php

use yii\db\Migration;

/**
 * Class m190602_175930_genre_table
 */
class m190602_175930_genre_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%genre}}', [
            'id' => $this->primaryKey(),
            'category' => $this->string(50)->notNull()->unique(),
        ]);

        $this->batchInsert('{{%genre}}', ['category'], [
            ['AÇÃO'],
            ['ANIMAÇÃO'],
            ['AVENTURA'],
            ['CINEMA DE ARTE'],
            ['CHANCHADA'],
            ['CINEMA CATÁSTROFE'],
            ['COMÉDIA'],
            ['COMÉDIA ROMÂNTICA'],
            ['COMÉDIA DRAMÁTICA'],
            ['COMÉDIA DE AÇÃO'],
            ['DANÇA'],
            ['DOCUMENTÁRIO'],
            ['DOCUFICÇÃO'],
            ['DRAMA'],
            ['ESPIONAGEM'],
            ['FAROESTE'],
            ['FANTASIA CIENTÍFICA'],
            ['FICÇÃO CIENTÍFICA'],
            ['MUSICAL'],
            ['POLICIAL'],
            ['ROMANCE'],
            ['SUSPENSE'],
            ['TERROR'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%genre}}');
    }


}
