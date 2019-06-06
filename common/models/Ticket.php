<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ticket".
 *
 * @property int $id
 * @property int $half-fare
 * @property int $client_id
 * @property int $session_id
 * @property int $created_at
 *
 * @property Client $client
 * @property Session $session
 */
class Ticket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ticket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['half-fare', 'client_id', 'session_id', 'created_at'], 'integer'],
            [['created_at'], 'required'],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['client_id' => 'id']],
            [['session_id'], 'exist', 'skipOnError' => true, 'targetClass' => Session::className(), 'targetAttribute' => ['session_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'half-fare' => 'Half Fare',
            'client_id' => 'Client ID',
            'session_id' => 'Session ID',
            'created_at' => 'Created At',
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
     * @return \yii\db\ActiveQuery
     */
    public function getSession()
    {
        return $this->hasOne(Session::className(), ['id' => 'session_id']);
    }

    /**
     * {@inheritdoc}
     * @return TicketQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TicketQuery(get_called_class());
    }
}
