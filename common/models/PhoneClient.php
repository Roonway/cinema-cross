<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "phone_client".
 *
 * @property int $client_id
 * @property string $phone
 *
 * @property Client $client
 */
class PhoneClient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'phone_client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'phone'], 'required'],
            [['client_id'], 'integer'],
            [['phone'], 'string', 'max' => 255],
            [['phone'], 'unique'],
            [['client_id', 'phone'], 'unique', 'targetAttribute' => ['client_id', 'phone']],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['client_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'client_id' => 'Client ID',
            'phone' => 'Phone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Client::className(), ['id' => 'client_id']);
    }

    /**
     * {@inheritdoc}
     * @return PhoneClientQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PhoneClientQuery(get_called_class());
    }
}
