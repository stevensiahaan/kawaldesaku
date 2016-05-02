<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dayamasyarakat".
 *
 * @property integer $id_daya_masyarakat
 * @property integer $id_desa
 * @property string $jenis_kegiatan
 * @property string $lokasi
 * @property integer $volume
 * @property integer $satuan
 * @property integer $biaya
 * @property string $start_date
 * @property string $due_date
 *
 * @property Desa $idDesa
 * @property Termindayamas[] $termindayamas
 */
class Dayamasyarakat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dayamasyarakat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_desa', 'jenis_kegiatan', 'lokasi', 'biaya', 'start_date', 'due_date'], 'required'],
            [['id_desa', 'volume', 'biaya'], 'integer'],
            [['start_date', 'due_date'], 'safe'],
            [['jenis_kegiatan', 'satuan'], 'string', 'max' => 30],
            [['lokasi'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_daya_masyarakat' => 'Id Daya Masyarakat',
            'id_desa' => 'Id Desa',
            'jenis_kegiatan' => 'Jenis Kegiatan',
            'lokasi' => 'Lokasi',
            'volume' => 'Volume',
            'satuan' => 'Satuan',
            'biaya' => 'Biaya',
            'start_date' => 'Start Date',
            'due_date' => 'Due Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDesa()
    {
        return $this->hasOne(Desa::className(), ['id_desa' => 'id_desa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTermindayamas()
    {
        return $this->hasMany(Termindayamas::className(), ['id_daymas' => 'id_daya_masyarakat']);
    }
}
