<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property string $a_name Name
 * @property string|null $a_year Birthday
 * @property float|null $a_rating Rating
 *
 * @property Books[] $books
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['a_name'], 'required'],
            [['a_year'], 'safe'],
            [['a_rating'], 'number'],
            [['a_name'], 'string', 'max' => 100],
            [['a_name'], 'unique', 'message' => 'Такой автор уже есть.'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'a_name' => 'Name',
            'a_year' => 'Birthday',
            'a_rating' => 'Rating',
        ];
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['b_author_name' => 'a_name']);
    }
}
