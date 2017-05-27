<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Staff;

/**
 * StaffSearch represents the model behind the search form of `backend\models\Staff`.
 */
class StaffSearch extends Staff
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EmployeeID', 'Subdivision'], 'integer'],
            [['EmployeeName', 'Passport', 'Birthdate', 'Speciality', 'Hired', 'Fired'], 'safe'],
            [['Rate', 'Earned', 'PaidOut', 'Balance'], 'number'],
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
        $query = Staff::find();

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
            'EmployeeID' => $this->EmployeeID,
            'Birthdate' => $this->Birthdate,
            'Hired' => $this->Hired,
            'Fired' => $this->Fired,
            'Rate' => $this->Rate,
            'Earned' => $this->Earned,
            'PaidOut' => $this->PaidOut,
            'Balance' => $this->Balance,
            'Subdivision' => $this->Subdivision,
        ]);

        $query->andFilterWhere(['like', 'EmployeeName', $this->EmployeeName])
            ->andFilterWhere(['like', 'Passport', $this->Passport])
            ->andFilterWhere(['like', 'Speciality', $this->Speciality]);

        return $dataProvider;
    }
}
