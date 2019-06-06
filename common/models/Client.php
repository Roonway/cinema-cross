<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $birthday
 * @property string $street
 * @property int $number
 * @property string $district
 * @property string $city
 * @property int $created_at
 * @property int $updated_at
 *
 * @property PhoneClient[] $phoneClients
 * @property Sale[] $sales
 * @property Product[] $products
 * @property Ticket[] $tickets
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birthday'], 'safe'],
            [['number', 'created_at', 'updated_at'], 'integer'],
            [['city', 'created_at', 'updated_at'], 'required'],
            [['name', 'email', 'street'], 'string', 'max' => 255],
            [['district', 'city'], 'string', 'max' => 50],
            [['email'], 'unique'],
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
            'birthday' => 'Birthday',
            'street' => 'Street',
            'number' => 'Number',
            'district' => 'District',
            'city' => 'City',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhoneClients()
    {
        return $this->hasMany(PhoneClient::className(), ['client_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sale::className(), ['client_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id' => 'product_id'])->viaTable('sale', ['client_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Ticket::className(), ['client_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return ClientQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClientQuery(get_called_class());
    }
}
