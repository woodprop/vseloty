<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "debtors".
 *
 * @property string $id
 * @property string|null $name
 * @property string|null $type
 * @property string|null $link
 */
class Debtor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'debtors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'type'], 'string', 'max' => 16],
            [['name', 'link'], 'string', 'max' => 255],
            [['id'], 'unique'],
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
            'type' => 'Type',
            'link' => 'Link',
        ];
    }

    public function getMessages(){
        return $this->hasMany(Message::class, ['inn' => 'id']);
    }
}
