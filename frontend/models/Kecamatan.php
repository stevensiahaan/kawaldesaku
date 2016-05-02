<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kecamatan".
 *
 * @property integer $id_kecamatan
 * @property integer $id_kabupaten
 * @property string $nama_kecamatan
 *
 * @property Desa[] $desas
 * @property Kabupaten $idKabupaten
 */
class Kecamatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kecamatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kabupaten', 'nama_kecamatan'], 'required'],
            [['id_kabupaten'], 'integer'],
            [['nama_kecamatan'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kecamatan' => 'Id Kecamatan',
            'id_kabupaten' => 'Id Kabupaten',
            'nama_kecamatan' => 'Nama Kecamatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDesas()
    {
        return $this->hasMany(Desa::className(), ['id_kecamatan' => 'id_kecamatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKabupaten()
    {
        return $this->hasOne(Kabupaten::className(), ['id_kabupaten' => 'id_kabupaten']);
    }
}
