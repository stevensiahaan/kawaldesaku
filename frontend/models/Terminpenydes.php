<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "terminpenydes".
 *
 * @property integer $id_terminpenydes
 * @property integer $id_penydes
 * @property string $keterangan
 * @property string $foto_1
 * @property string $foto_2
 * @property string $foto_3
 * @property string $foto_4
 * @property string $foto_5
 * @property string $deskripsi
 *
 * @property Komentarpenydes[] $komentarpenydes
 * @property Penyelenggaraanpemdes $idPenydes
 */
class Terminpenydes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'terminpenydes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penydes', 'keterangan', 'deskripsi'], 'required'],
            [['id_penydes'], 'integer'],
            [['deskripsi'], 'string'],
            [['keterangan'], 'string', 'max' => 50],
            [['foto_1', 'foto_2', 'foto_3', 'foto_4', 'foto_5','file_1','file_2','file_3','file_4','file_5'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_terminpenydes' => 'Id Terminpenydes',
            'id_penydes' => 'Id Penydes',
            'keterangan' => 'Keterangan',
            'foto_1' => 'Foto 1',
            'foto_2' => 'Foto 2',
            'foto_3' => 'Foto 3',
            'foto_4' => 'Foto 4',
            'foto_5' => 'Foto 5',
            'file_1' => 'File 1',
            'file_2' => 'File 2',
            'file_3' => 'File 3',
            'file_4' => 'File 4',
            'file_5' => 'File 5',
            'deskripsi' => 'Deskripsi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKomentarpenydes()
    {
        return $this->hasMany(Komentarpenydes::className(), ['id_terminpenydes' => 'id_terminpenydes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPenydes()
    {
        return $this->hasOne(Penyelenggaraanpemdes::className(), ['id_peny_pemdesa' => 'id_penydes']);
    }
}
