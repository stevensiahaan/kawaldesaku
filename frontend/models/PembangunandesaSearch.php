<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pembangunandesa;

/**
 * PembangunandesaSearch represents the model behind the search form about `frontend\models\Pembangunandesa`.
 */
class PembangunandesaSearch extends Pembangunandesa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pemb_desa', 'id_desa', 'jenis_pembangunan_desa', 'volume', 'satuan', 'biaya'], 'integer'],
            [['jenis_kegiatan', 'lokasi', 'start_date', 'due_date'], 'safe'],
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
        $query = Pembangunandesa::find();

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
            'id_pemb_desa' => $this->id_pemb_desa,
            'id_desa' => $this->id_desa,
            'jenis_pembangunan_desa' => $this->jenis_pembangunan_desa,
            'volume' => $this->volume,
            'satuan' => $this->satuan,
            'biaya' => $this->biaya,
            'start_date' => $this->start_date,
            'due_date' => $this->due_date,
        ]);

        $query->andFilterWhere(['like', 'jenis_kegiatan', $this->jenis_kegiatan])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi]);

        return $dataProvider;
    }

    public function search1($params)
    {
        $this->id_desa = $params;
        $query = Pembangunandesa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['id_pemb_desa'=>SORT_DESC]]

            ]);

        $dataProvider->sort->attributes['Sub bidang'] = [
        // The tables are the ones our relation are configured to
        // in my case they are prefixed with "tbl_"
        'asc' => ['jenis_pembangunan_desa' => SORT_ASC],
        'desc' => ['jenis_pembangunan_desa' => SORT_DESC],
        ];

  
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_pemb_desa' => $this->id_pemb_desa,
            'id_desa' => $this->id_desa,
            'jenis_pembangunan_desa' => $this->jenis_pembangunan_desa,
            'volume' => $this->volume,
            'satuan' => $this->satuan,
            'biaya' => $this->biaya,
            'start_date' => $this->start_date,
            'due_date' => $this->due_date,
        ]);

        $query->andFilterWhere(['like', 'jenis_kegiatan', $this->jenis_kegiatan])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi]);

        return $dataProvider;
    }
}
