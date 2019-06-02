<?php

use yii\db\Migration;

/**
 * Class m190602_175202_director_table
 */
class m190602_175202_director_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%director}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->unique()



        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%director}}');
    }


}
