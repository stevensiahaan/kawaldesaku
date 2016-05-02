<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Kecamatan;

/**
 * KecamatanSearch represents the model behind the search form about `frontend\models\Kecamatan`.
 */
class KecamatanSearch extends Kecamatan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kecamatan', 'id_kabupaten'], 'integer'],
            [['nama_kecamatan'], 'safe'],
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
        $query = Kecamatan::find();

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
            'id_kecamatan' => $this->id_kecamatan,
            'id_kabupaten' => $this->id_kabupaten,
        ]);

        $query->andFilterWhere(['like', 'nama_kecamatan', $this->nama_kecamatan]);

        return $dataProvider;
    }
}
