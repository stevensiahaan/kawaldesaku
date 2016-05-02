<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pembangunandesa".
 *
 * @property integer $id_pemb_desa
 * @property integer $id_desa
 * @property integer $jenis_pembangunan_desa
 * @property string $jenis_kegiatan
 * @property string $lokasi
 * @property integer $volume
 * @property integer $satuan
 * @property integer $biaya
 * @property string $start_date
 * @property string $due_date
 *
 * @property Subpembdesa $jenisPembangunanDesa
 * @property Desa $idDesa
 * @property Terminpembdes[] $terminpembdes
 */
class Pembangunandesa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pembangunandesa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_desa', 'jenis_pembangunan_desa', 'jenis_kegiatan', 'start_date', 'due_date'], 'required'],
            [['id_desa', 'jenis_pembangunan_desa', 'volume', 'biaya'], 'integer'],
            [['start_date', 'due_date'], 'safe'],
            [['jenis_kegiatan', 'lokasi', 'satuan'], 'string', 'max' => 50],
            [['jenis_pembangunan_desa'], 'exist', 'skipOnError' => true, 'targetClass' => Subpembdesa::className(), 'targetAttribute' => ['jenis_pembangunan_desa' => 'id_subpembdesa']],
            [['id_desa'], 'exist', 'skipOnError' => true, 'targetClass' => Desa::className(), 'targetAttribute' => ['id_desa' => 'id_desa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pemb_desa' => 'Id Pemb Desa',
            'id_desa' => 'Id Desa',
            'jenis_pembangunan_desa' => 'Jenis Pembangunan Desa',
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
    public function getJenisPembangunanDesa()
    {
        return $this->hasOne(Subpembdesa::className(), ['id_subpembdesa' => 'jenis_pembangunan_desa']);
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
    public function getTerminpembdes()
    {
        return $this->hasMany(Terminpembdes::className(), ['id_pembdes' => 'id_pemb_desa']);
    }
}
