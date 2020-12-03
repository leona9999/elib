<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "books".
 *
 * @property string $b_name Name
 * @property string $b_author_name Author Name
 * @property string|null $b_year Year
 * @property float|null $b_rating Rating
 *
 * @property Authors $bAuthorName
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['b_name', 'b_author_name'], 'required'],
            [['b_year'], 'safe'],
            [['b_rating'], 'number'],
            [['b_name', 'b_author_name'], 'string', 'max' => 100],
            [['b_name', 'b_author_name'], 'unique', 'targetAttribute' => ['b_name', 'b_author_name'], 'message' => 'Такая книга уже есть у данного автора.'],
            [['b_author_name'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::className(), 'targetAttribute' => ['b_author_name' => 'a_name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'b_name' => 'Name',
            'b_author_name' => 'Author Name',
            'b_year' => 'Year',
            'b_rating' => 'Rating',
        ];
    }

    /**
     * Gets query for [[BAuthorName]].
     *
     * @return ActiveQuery
     */
    public function getBAuthorName()
    {
        return $this->hasOne(Authors::className(), ['a_name' => 'b_author_name']);
    }

    /**
     * Gets all authors
     *
     * @return array
     */
    public function  getAuthors()
    {
        return ArrayHelper::map(Authors::find()->asArray()->all(), 'a_name', 'a_name');
    }

    /**
     * Gets list of years
     *
     * @return array
     */
    public function getYears()
    {
        $years = [];

        for ($i = 1950; $i < 2020; $i++) {
            array_push($years, ['year' => $i, 'date' => $i . '-01-01']);
        }

        return ArrayHelper::map($years, 'date', 'year');
    }
}
