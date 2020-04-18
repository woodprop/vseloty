<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * LotSearch represents the model behind the search form of `app\models\Lot`.
 */
class LotSearch extends Lot
{

    public $priceMin;
    public $priceMax;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'start_price'], 'integer'],
            [['message_number', 'description', 'address', 'type'], 'safe'],
            [['priceMin', 'priceMax'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Lot::find()->joinWith('messages');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['attributes' => ['start_price', 'messages.date_start', 'messages.date_pub']],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'start_price' => $this->start_price,
        ]);


        $query->andFilterWhere(['like', 'lots.message_number', $this->message_number])
            ->andFilterWhere(['like', 'lots.description', $this->description])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['between', 'start_price', $this->priceMin, $this->priceMax]);
        return $dataProvider;
    }
}
