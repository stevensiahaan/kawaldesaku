<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "terminbinmas".
 *
 * @property integer $id_terminbinmas
 * @property integer $id_binmas
 * @property string $keterangan
 * @property string $foto_1
 * @property string $foto_2
 * @property string $foto_3
 * @property string $foto_4
 * @property string $foto_5
 * @property string $deskripsi
 *
 * @property Komentarbinmas[] $komentarbinmas
 * @property Binamasyarakat $idBinmas
 */
class Terminbinmas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file1;
    public $file2;
    public static function tableName()
    {
        return 'terminbinmas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_binmas', 'keterangan', 'deskripsi'], 'required'],
            [['id_binmas'], 'integer'],
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
            'id_terminbinmas' => 'Id Terminbinmas',
            'id_binmas' => 'Id Binmas',
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
    public function getKomentarbinmas()
    {
        return $this->hasMany(Komentarbinmas::className(), ['id_terminbinmas' => 'id_terminbinmas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBinmas()
    {
        return $this->hasOne(Binamasyarakat::className(), ['id_bina_masyarakat' => 'id_binmas']);
    }
}
