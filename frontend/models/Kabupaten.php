<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kabupaten".
 *
 * @property integer $id_kabupaten
 * @property integer $id_provinsi
 * @property string $nama_kabupaten
 *
 * @property Desa[] $desas
 * @property Provinsi $idProvinsi
 * @property Kecamatan[] $kecamatans
 */
class Kabupaten extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kabupaten';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_provinsi', 'nama_kabupaten'], 'required'],
            [['id_provinsi'], 'integer'],
            [['nama_kabupaten'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kabupaten' => 'Id Kabupaten',
            'id_provinsi' => 'Id Provinsi',
            'nama_kabupaten' => 'Nama Kabupaten',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDesas()
    {
        return $this->hasMany(Desa::className(), ['id_kabupaten' => 'id_kabupaten']);
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
    public function getKecamatans()
    {
        return $this->hasMany(Kecamatan::className(), ['id_kabupaten' => 'id_kabupaten']);
    }
}
