<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bidang;

/**
 * BidangSearch represents the model behind the search form about `app\models\Bidang`.
 */
class BidangSearch extends Bidang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_bidang'], 'integer'],
            [['nama_bidang'], 'safe'],
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
        $query = Bidang::find();

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
            'id_bidang' => $this->id_bidang,
        ]);

        $query->andFilterWhere(['like', 'nama_bidang', $this->nama_bidang]);

        return $dataProvider;
    }
}
