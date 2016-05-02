<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Komentarbinmas;

/**
 * KomentarbinmasSearch represents the model behind the search form about `app\models\Komentarbinmas`.
 */
class KomentarbinmasSearch extends Komentarbinmas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_komentar', 'id_terminbinmas'], 'integer'],
            [['nama_tamu', 'tanggal', 'komentar'], 'safe'],
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
        $query = Komentarbinmas::find();

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
            'id_komentar' => $this->id_komentar,
            'id_terminbinmas' => $this->id_terminbinmas,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'nama_tamu', $this->nama_tamu])
            ->andFilterWhere(['like', 'komentar', $this->komentar]);

        return $dataProvider;
    }
}
