<?php
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "desa".
 *
 * @property integer $id_desa
 * @property integer $id_kecamatan
 * @property integer $id_kabupaten
 * @property integer $id_provinsi
 * @property string $nama_desa
 * @property string $deskripsi_desa
 *
 * @property Provinsi $idProvinsi
 * @property Kabupaten $idKabupaten
 * @property Kecamatan $idKecamatan
 * @property DesaBidang[] $desaBidangs
 * @property ProfilAparat[] $profilAparats
 */
class Desa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'desa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kecamatan', 'nama_desa'], 'required'],
            [['id_kecamatan', 'id_kabupaten', 'id_provinsi'], 'integer'],
            [['deskripsi_desa'], 'string'],
            [['nama_desa'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_desa' => 'Nama Desa',
            'id_kecamatan' => 'Nama Kecamatan',
            'id_kabupaten' => 'Nama Kabupaten',
            'id_provinsi' => 'Nama Provinsi',
            'nama_desa' => 'Nama Desa',
            'deskripsi_desa' => 'Deskripsi Desa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProvinsi()
    {
        return $this->hasOne(Provinsi::className(), ['id_provinsi' => 'id_provinsi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKabupaten()
    {
        return $this->hasOne(Kabupaten::className(), ['id_kabupaten' => 'id_kabupaten']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKecamatan()
    {
        return $this->hasOne(Kecamatan::className(), ['id_kecamatan' => 'id_kecamatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDesaBidangs()
    {
        return $this->hasMany(DesaBidang::className(), ['id_desa' => 'id_desa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfilAparats()
    {
        return $this->hasMany(ProfilAparat::className(), ['id_desa' => 'id_desa']);
    }
}
