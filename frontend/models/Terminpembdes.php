<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "terminpembdes".
 *
 * @property integer $id_terminpembdes
 * @property integer $id_pembdes
 * @property string $keterangan
 * @property string $foto_1
 * @property string $foto_2
 * @property string $foto_3
 * @property string $foto_4
 * @property string $foto_5
 * @property string $deskripsi
 *
 * @property Komentarpembdes[] $komentarpembdes
 * @property Pembangunandesa $idPembdes
 */
class Terminpembdes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'terminpembdes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pembdes', 'keterangan', 'deskripsi'], 'required'],
            [['id_pembdes'], 'integer'],
            [['deskripsi'], 'string'],
            [['keterangan'], 'string', 'max' => 50],
            [['foto_1', 'foto_2', 'foto_3', 'foto_4', 'foto_5','file_1', 'file_2', 'file_3', 'file_4', 'file_5'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_terminpembdes' => 'Id Terminpembdes',
            'id_pembdes' => 'Id Pembdes',
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
    public function getKomentarpembdes()
    {
        return $this->hasMany(Komentarpembdes::className(), ['id_terminpembdes' => 'id_terminpembdes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPembdes()
    {
        return $this->hasOne(Pembangunandesa::className(), ['id_pemb_desa' => 'id_pembdes']);
    }
}
