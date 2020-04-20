<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property int $id
 * @property string|null $inn
 * @property string|null $date_pub
 * @property string|null $message_number
 * @property string|null $description
 * @property string|null $auction_type
 * @property string|null $date_start
 * @property string|null $place
 * @property string|null $link
 *
 * @property Lots[] $lots
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['inn', 'date_pub', 'message_number', 'date_start'], 'string', 'max' => 16],
            [['auction_type'], 'string', 'max' => 32],
            [['place', 'link'], 'string', 'max' => 255],
            [['message_number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'inn' => 'ИНН должника',
            'date_pub' => 'Дата публикации',
            'message_number' => 'Номер сообщения',
            'description' => 'Описание',
            'auction_type' => 'Тип аукциона',
            'date_start' => 'Начало приёма заявок',
            'place' => 'Место проведения',
            'link' => 'Ссылка',
        ];
    }

    /**
     * Gets query for [[Lots]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLots()
    {
        return $this->hasMany(Lot::class, ['message_number' => 'message_number']);
    }

    public function getDebtor(){
        return $this->hasOne(Debtor::class, ['id' => 'inn']);
    }
}
