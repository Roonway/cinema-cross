<?php

use yii\db\Migration;

/**
 * Class m190602_180410_phone_employee_table
 */
class m190602_180410_phone_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */

    /**Atenção Esse migrate está incompleto! */

    public function safeUp()
    {
        $this->createTable('{{%phone_employee}}',[
            $this->addForeignKey('fk_phone_employee_id','{{%phone_employee}}','employee_id','{{%employee}}','id','CASCADE','CASCADE'),
            'phone' => $this->string(15)->unique()->notNull(),

            $this->addPrimaryKey('pk_phone_employee','{{%phone_employee}}','employee_id,phone')


        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%phone_employee}}');
    }

}
