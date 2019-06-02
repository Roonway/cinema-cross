<?php

use yii\db\Migration;

/**
 * Class m190602_172737_employee_table
 */
class m190602_172737_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employee}}',[
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->unique(),
            'birthday' => $this->date(),
            'street' => $this->string(255)->notNull(),
            'district' => $this->string(50)->notNull(),
            'city' => $this->string(50)->notNull(),

            $this->addForeignKey('fk_employee_room_id','{{%employee}}','room_id','{{%room}}','id','CASCADE','CASCADE')

        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%employee}}');
    }

}
