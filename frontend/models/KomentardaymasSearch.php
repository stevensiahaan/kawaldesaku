<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Komentardaymas;

/**
 * KomentardaymasSearch represents the model behind the search form about `app\models\Komentardaymas`.
 */
class KomentardaymasSearch extends Komentardaymas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_komentar', 'id_termindayamas'], 'integer'],
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
        $query = Komentardaymas::find();

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
            'id_termindayamas' => $this->id_termindayamas,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'nama_tamu', $this->nama_tamu])
            ->andFilterWhere(['like', 'komentar', $this->komentar]);

        return $dataProvider;
    }
}
