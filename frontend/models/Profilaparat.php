<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profilaparat".
 *
 * @property integer $id_profil
 * @property integer $id_desa
 * @property string $nama
 * @property string $tgl_lahir
 * @property string $jabatan
 * @property string $alamat
 * @property string $status
 * @property string $foto
 *
 * @property Desa $idDesa
 */
class Profilaparat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profilaparat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_desa', 'nama', 'tgl_lahir', 'jabatan', 'alamat', 'status', 'foto'], 'required'],
            [['id_desa'], 'integer'],
            [['tgl_lahir'], 'safe'],
            [['nama', 'foto'], 'string', 'max' => 30],
            [['jabatan'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 200],
            [['status'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_profil' => 'Id Profil',
            'id_desa' => 'Id Desa',
            'nama' => 'Nama',
            'tgl_lahir' => 'Tgl Lahir',
            'jabatan' => 'Jabatan',
            'alamat' => 'Alamat',
            'status' => 'Status',
            'foto' => 'Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDesa()
    {
        return $this->hasOne(Desa::className(), ['id_desa' => 'id_desa']);
    }
}
