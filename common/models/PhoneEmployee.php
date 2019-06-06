<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "phone_employee".
 *
 * @property int $employee_id
 * @property string $phone
 *
 * @property Employee $employee
 */
class PhoneEmployee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'phone_employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employee_id', 'phone'], 'required'],
            [['employee_id'], 'integer'],
            [['phone'], 'string', 'max' => 15],
            [['phone'], 'unique'],
            [['employee_id', 'phone'], 'unique', 'targetAttribute' => ['employee_id', 'phone']],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Employee ID',
            'phone' => 'Phone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }

    /**
     * {@inheritdoc}
     * @return PhoneEmployeeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PhoneEmployeeQuery(get_called_class());
    }
}
