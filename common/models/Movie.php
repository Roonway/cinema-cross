<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "movie".
 *
 * @property int $id
 * @property string $title
 * @property int $year
 * @property int $duration
 * @property int $indicative_classify
 * @property int $director_id
 * @property int $genre_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Director $director
 * @property Genre $genre
 * @property Session[] $sessions
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'year', 'created_at', 'updated_at'], 'required'],
            [['year', 'duration', 'indicative_classify', 'director_id', 'genre_id', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['director_id'], 'exist', 'skipOnError' => true, 'targetClass' => Director::className(), 'targetAttribute' => ['director_id' => 'id']],
            [['genre_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['genre_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Título',
            'year' => 'Ano',
            'duration' => 'Duração',
            'indicative_classify' => 'Classificação Indicativa',
            'director_id' => 'ID do Diretor',
            'genre_id' => 'ID do Gênero',
            'created_at' => 'Data de Criação',
            'updated_at' => 'Data de Alteração',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirector()
    {
        return $this->hasOne(Director::className(), ['id' => 'director_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'genre_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSessions()
    {
        return $this->hasMany(Session::className(), ['movie_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return MovieQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MovieQuery(get_called_class());
    }
}
