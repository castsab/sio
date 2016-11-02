<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Client;

/**
 * ClientSearch represents the model behind the search form of `backend\models\Client`.
 */
class ClientSearch extends Client
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_document', 'document', 'id_user', 'type_client', 'status', 'created_at', 'updated_at', 'cell_phone', 'local_phone', 'extension', 'contact_project', 'contact_business'], 'integer'],
            [['city_origin', 'name_company', 'address', 'web_site', 'fax', 'pbx', 'first_name', 'last_name', 'office_address', 'email'], 'safe'],
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
        $query = Client::find();

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
            'type_document' => $this->type_document,
            'document' => $this->document,
            'id_user' => $this->id_user,
            'type_client' => $this->type_client,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'cell_phone' => $this->cell_phone,
            'local_phone' => $this->local_phone,
            'extension' => $this->extension,
            'contact_project' => $this->contact_project,
            'contact_business' => $this->contact_business,
        ]);

        $query->andFilterWhere(['like', 'city_origin', $this->city_origin])
            ->andFilterWhere(['like', 'name_company', $this->name_company])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'web_site', $this->web_site])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'pbx', $this->pbx])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'office_address', $this->office_address])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
