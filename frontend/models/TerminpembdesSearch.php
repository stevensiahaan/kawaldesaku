<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Terminpembdes;

/**
 * TerminpembdesSearch represents the model behind the search form about `app\models\Terminpembdes`.
 */
class TerminpembdesSearch extends Terminpembdes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_terminpembdes', 'id_pembdes'], 'integer'],
            [['keterangan', 'foto_1', 'foto_2', 'foto_3', 'foto_4', 'foto_5','file_1', 'file_2', 'file_3', 'file_4', 'file_5', 'deskripsi'], 'safe'],
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
        $query = Terminpembdes::find();

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
            'id_terminpembdes' => $this->id_terminpembdes,
            'id_pembdes' => $this->id_pembdes,
        ]);

        $query->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'foto_1', $this->foto_1])
            ->andFilterWhere(['like', 'foto_2', $this->foto_2])
            ->andFilterWhere(['like', 'foto_3', $this->foto_3])
            ->andFilterWhere(['like', 'foto_4', $this->foto_4])
            ->andFilterWhere(['like', 'foto_5', $this->foto_5])
            ->andFilterWhere(['like', 'file_1', $this->file_1])
            ->andFilterWhere(['like', 'file_2', $this->file_2])
            ->andFilterWhere(['like', 'file_3', $this->file_3])
            ->andFilterWhere(['like', 'file_4', $this->file_4])
            ->andFilterWhere(['like', 'file_5', $this->file_5])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }

    public function search1($params)
    {
        $this->id_pembdes = $params;
        $query = Terminpembdes::find();

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
            'id_terminpembdes' => $this->id_terminpembdes,
            'id_pembdes' => $this->id_pembdes,
        ]);

        $query->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'foto_1', $this->foto_1])
            ->andFilterWhere(['like', 'foto_2', $this->foto_2])
            ->andFilterWhere(['like', 'foto_3', $this->foto_3])
            ->andFilterWhere(['like', 'foto_4', $this->foto_4])
            ->andFilterWhere(['like', 'foto_5', $this->foto_5])
            ->andFilterWhere(['like', 'file_1', $this->file_1])
            ->andFilterWhere(['like', 'file_2', $this->file_2])
            ->andFilterWhere(['like', 'file_3', $this->file_3])
            ->andFilterWhere(['like', 'file_4', $this->file_4])
            ->andFilterWhere(['like', 'file_5', $this->file_5])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }
}
