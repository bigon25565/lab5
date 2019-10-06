<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Asd;

/**
 * ItemsSearch represents the model behind the search form of `app\models\Asd`.
 */
class ItemsSearch extends Asd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Count', 'category_id'], 'integer'],
            [['ame', 'Description', 'author'], 'safe'],
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
        $query = Asd::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
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
            'Count' => $this->Count,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['like', 'ame', $this->ame])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'author', $this->author]);

        return $dataProvider;
    }
}
