<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lots".
 *
 * @property int $id
 * @property string|null $message_number
 * @property string|null $description
 * @property string|null $address
 * @property string|null $type
 * @property int|null $start_price
 *
 * @property Message $messageNumber
 */
class Lot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lots';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'address'], 'string'],
            [['start_price'], 'integer'],
            [['message_number', 'type'], 'string', 'max' => 16],
            [['message_number'], 'exist', 'skipOnError' => true, 'targetClass' => Message::class, 'targetAttribute' => ['message_number' => 'message_number']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'message_number' => '№ сообщения',
            'description' => 'Описание',
            'address' => 'Адрес',
            'type' => 'Тип',
            'start_price' => 'Начальная цена',
        ];
    }

    /**
     * Gets query for [[MessageNumber]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMessage()
    {
        return $this->hasOne(Message::class, ['message_number' => 'message_number']);
    }


}
