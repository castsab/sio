<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\QuoteService;

/**
 * QuoteServiceSearch represents the model behind the search form of `backend\models\QuoteService`.
 */
class QuoteServiceSearch extends QuoteService
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_quote', 'id_user', 'id_service', 'estimate_hours', 'status', 'created_at', 'updated_at'], 'integer'],
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
    public function search($params,$id=null)
    {
        $query = QuoteService::find();

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
            'id_quote' => $this->id_quote,
            'id_user' => $this->id_user,
            'id_service' => $this->id_service,
            'estimate_hours' => $this->estimate_hours,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);
        
        if($id != null)
            $query->andFilterWhere(['id_quote'=>$id]);

        return $dataProvider;
    }
}
