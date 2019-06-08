<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "seat".
 *
 * @property int $id
 * @property int $room_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Room $room
 */
class Seat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id', 'created_at', 'updated_at'], 'integer'],
            [['created_at', 'updated_at'], 'required'],
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
            'room_id' => 'ID da Sala',
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
     * {@inheritdoc}
     * @return SeatQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SeatQuery(get_called_class());
    }
}
