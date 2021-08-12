<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Order;

/**
 * OrderSearch represents the model behind the search form of `backend\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jumlah_orang', 'status', 'id_user'], 'integer'],
            [['tanggal_pesan', 'jam_pesan', 'bukti_pembayaran'], 'safe'],
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
        $query = Order::find();

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
            'tanggal_pesan' => $this->tanggal_pesan,
            'jam_pesan' => $this->jam_pesan,
            'jumlah_orang' => $this->jumlah_orang,
            'status' => $this->status,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'bukti_pembayaran', $this->bukti_pembayaran]);

        return $dataProvider;
    }
}
