<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $cpf
 * @property string $birthday
 * @property string $street
 * @property string $district
 * @property string $city
 * @property int $room_id
 * @property int $manager
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Room $room
 * @property PhoneEmployee[] $phoneEmployees
 * @property User $user
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'cpf', 'street', 'district', 'city', 'created_at', 'updated_at'], 'required'],
            [['birthday'], 'safe'],
            [['room_id', 'manager', 'created_at', 'updated_at'], 'integer'],
            [['name', 'email', 'street'], 'string', 'max' => 255],
            [['cpf'], 'string', 'max' => 11],
            [['district', 'city'], 'string', 'max' => 50],
            [['cpf'], 'unique'],
            [['email'], 'unique'],
            ['email', 'email', 'checkDNS' => true],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'cpf' => 'Cpf',
            'birthday' => 'Birthday',
            'street' => 'Street',
            'district' => 'District',
            'city' => 'City',
            'room_id' => 'Room ID',
            'manager' => 'Manager',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhoneEmployees()
    {
        return $this->hasMany(PhoneEmployee::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['employee_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return EmployeeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EmployeeQuery(get_called_class());
    }
}
