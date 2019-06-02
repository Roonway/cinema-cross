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
        $this->createTable('{{%genre}}',[
           'id' => $this->primaryKey(),
           'category' => $this->string(50)->notNull()->unique()

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
