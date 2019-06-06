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
            'employee_id' => $this->integer(),
            'phone' => $this->string(15)->unique()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        $this->createIndex('idx-phone_employee-employee_id', '{{%phone_employee}}', 'employee_id');
        $this->createIndex('idx-phone_employee-phone-employee_id', '{{%phone_employee}}', ['employee_id', 'phone'], true);

        $this->addPrimaryKey('pk-phone_employee-phone-employee_id','{{%phone_employee}}',['employee_id','phone']);
        $this->addForeignKey('fk-phone_employee-employee_id','{{%phone_employee}}','employee_id','{{%employee}}','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%phone_employee}}');
    }

}
