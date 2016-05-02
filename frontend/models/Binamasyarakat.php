<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "binamasyarakat".
 *
 * @property integer $id_bina_masyarakat
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
 * @property Terminbinmas[] $terminbinmas
 */
class Binamasyarakat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'binamasyarakat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_desa', 'jenis_kegiatan', 'lokasi', 'start_date', 'due_date'], 'required'],
            [['id_desa', 'volume', 'biaya'], 'integer'],
            [['start_date', 'due_date'], 'safe'],
            [['jenis_kegiatan', 'lokasi','satuan'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_bina_masyarakat' => 'Id Bina Masyarakat',
            'id_desa' => 'Desa',
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
    public function getTerminbinmas()
    {
        return $this->hasMany(Terminbinmas::className(), ['id_binmas' => 'id_bina_masyarakat']);
    }
}
