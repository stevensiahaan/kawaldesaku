<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "komentarbinmas".
 *
 * @property integer $id_komentar
 * @property integer $id_terminbinmas
 * @property string $nama_tamu
 * @property string $tanggal
 * @property string $komentar
 *
 * @property Terminbinmas $idTerminbinmas
 */
class Komentarbinmas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'komentarbinmas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_terminbinmas', 'nama_tamu', 'tanggal', 'komentar'], 'required'],
            [['id_terminbinmas'], 'integer'],
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
            'id_terminbinmas' => 'Id Terminbinmas',
            'nama_tamu' => 'Nama Tamu',
            'tanggal' => 'Tanggal',
            'komentar' => 'Komentar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTerminbinmas()
    {
        return $this->hasOne(Terminbinmas::className(), ['id_terminbinmas' => 'id_terminbinmas']);
    }
}
