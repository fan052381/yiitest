<?php

namespace backend\modules\products\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\products\models\Products;

/**
 * ProductsSearch represents the model behind the search form about `backend\modules\products\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'code'], 'integer'],
            [['company', 'industry', 'products', 'functions', 'power', 'neighbor', 'competitor'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Products::find();

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
            'code' => $this->code,
        ]);

        $query->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'industry', $this->industry])
            ->andFilterWhere(['like', 'products', $this->products])
            ->andFilterWhere(['like', 'functions', $this->functions])
            ->andFilterWhere(['like', 'power', $this->power])
            ->andFilterWhere(['like', 'neighbor', $this->neighbor])
            ->andFilterWhere(['like', 'competitor', $this->competitor]);

        return $dataProvider;
    }
}
