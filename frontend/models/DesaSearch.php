<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Desa;

/**
 * DesaSearch represents the model behind the search form about `frontend\models\Desa`.
 */
class DesaSearch extends Desa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_desa', 'id_kecamatan', 'id_kabupaten', 'id_provinsi'], 'integer'],
            [['nama_desa', 'deskripsi_desa'], 'safe'],
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
        $query = Desa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_desa' => $this->id_desa,
            'id_kecamatan' => $this->id_kecamatan,
            'id_kabupaten' => $this->id_kabupaten,
            'id_provinsi' => $this->id_provinsi,
        ]);

        $query->andFilterWhere(['like', 'nama_desa', $this->nama_desa])
            ->andFilterWhere(['like', 'deskripsi_desa', $this->deskripsi_desa]);

        return $dataProvider;
    }
}
