<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Making;

/**
 * MakingSearch represents the model behind the search form of `backend\models\Making`.
 */
class MakingSearch extends Making
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'ProductId', 'ColorId', 'FormulaId', 'Amount', 'FirstSort', 'SecondSort', 'BadWork'], 'integer'],
            [['Product', 'Recipe', 'Color', 'Produced', 'Sortedby', 'date'], 'safe'],
            [['AmountArea', 'FirstArea', 'pay_roll'], 'number'],
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
        $query = Making::find();

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
            'ID' => $this->ID,
            'ProductId' => $this->ProductId,
            'ColorId' => $this->ColorId,
            'FormulaId' => $this->FormulaId,
            'Amount' => $this->Amount,
            'AmountArea' => $this->AmountArea,
            'FirstSort' => $this->FirstSort,
            'FirstArea' => $this->FirstArea,
            'SecondSort' => $this->SecondSort,
            'BadWork' => $this->BadWork,
            'pay_roll' => $this->pay_roll,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'Product', $this->Product])
            ->andFilterWhere(['like', 'Recipe', $this->Recipe])
            ->andFilterWhere(['like', 'Color', $this->Color])
            ->andFilterWhere(['like', 'Produced', $this->Produced])
            ->andFilterWhere(['like', 'Sortedby', $this->Sortedby]);

        return $dataProvider;
    }
}
