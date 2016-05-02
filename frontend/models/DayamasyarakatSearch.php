<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dayamasyarakat;

/**
 * DayamasyarakatSearch represents the model behind the search form about `app\models\Dayamasyarakat`.
 */
class DayamasyarakatSearch extends Dayamasyarakat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_daya_masyarakat', 'id_desa', 'volume', 'satuan', 'biaya'], 'integer'],
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
        $query = Dayamasyarakat::find();

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
            'id_daya_masyarakat' => $this->id_daya_masyarakat,
            'id_desa' => $this->id_desa,
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
        $query = Dayamasyarakat::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['id_daya_masyarakat'=>SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_daya_masyarakat' => $this->id_daya_masyarakat,
            'id_desa' => $this->id_desa,
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
