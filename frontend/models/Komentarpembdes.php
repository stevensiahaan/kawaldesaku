<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "komentarpembdes".
 *
 * @property integer $id_komentar
 * @property integer $id_terminpembdes
 * @property string $nama_tamu
 * @property string $tanggal
 * @property string $komentar
 *
 * @property Terminpembdes $idTerminpembdes
 */
class Komentarpembdes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'komentarpembdes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_terminpembdes', 'nama_tamu', 'tanggal', 'komentar'], 'required'],
            [['id_terminpembdes'], 'integer'],
            [['tanggal'], 'safe'],
            [['komentar'], 'string'],
            [['nama_tamu'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_komentar' => 'Id Komentar',
            'id_terminpembdes' => 'Id Terminpembdes',
            'nama_tamu' => 'Nama Tamu',
            'tanggal' => 'Tanggal',
            'komentar' => 'Komentar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTerminpembdes()
    {
        return $this->hasOne(Terminpembdes::className(), ['id_terminpembdes' => 'id_terminpembdes']);
    }
}
