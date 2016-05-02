<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "termindayamas".
 *
 * @property integer $id_termindayamas
 * @property integer $id_daymas
 * @property string $keterangan
 * @property string $foto_1
 * @property string $foto_2
 * @property string $foto_3
 * @property string $foto_4
 * @property string $foto_5
 * @property string $deskripsi
 *
 * @property Komentardaymas[] $komentardaymas
 * @property Dayamasyarakat $idDaymas
 */
class Termindayamas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'termindayamas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_daymas', 'keterangan', 'deskripsi'], 'required'],
            [['id_daymas'], 'integer'],
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
            'id_termindayamas' => 'Id Termindayamas',
            'id_daymas' => 'Id Daymas',
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
    public function getKomentardaymas()
    {
        return $this->hasMany(Komentardaymas::className(), ['id_termindayamas' => 'id_termindayamas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDaymas()
    {
        return $this->hasOne(Dayamasyarakat::className(), ['id_daya_masyarakat' => 'id_daymas']);
    }
}
