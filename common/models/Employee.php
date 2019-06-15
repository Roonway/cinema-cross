<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

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
        return '{{%employee}}';
    }
    public function behaviors()
    {
        return [
            TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'cpf', 'street', 'district', 'city'], 'required'],
            [['birthday'], 'safe'],
            [['room_id', 'manager'], 'integer'],
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
            'name' => 'Nome',
            'email' => 'Email',
            'cpf' => 'CPF',
            'birthday' => 'Data de Nascimento',
            'street' => 'Logradouro',
            'district' => 'Bairro',
            'city' => 'Cidade',
            'room_id' => 'ID da Sala',
            'manager' => 'Gerente',
            'created_at' => 'Data de Criação',
            'updated_at' => 'Data de Alteração',
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
