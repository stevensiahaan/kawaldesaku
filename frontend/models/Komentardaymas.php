<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "komentardaymas".
 *
 * @property integer $id_komentar
 * @property integer $id_termindayamas
 * @property string $nama_tamu
 * @property string $tanggal
 * @property string $komentar
 *
 * @property Termindayamas $idTermindayamas
 */
class Komentardaymas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'komentardaymas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_termindayamas', 'nama_tamu', 'tanggal', 'komentar'], 'required'],
            [['id_termindayamas'], 'integer'],
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
            'id_termindayamas' => 'Id Termindayamas',
            'nama_tamu' => 'Nama Tamu',
            'tanggal' => 'Tanggal',
            'komentar' => 'Komentar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTermindayamas()
    {
        return $this->hasOne(Termindayamas::className(), ['id_termindayamas' => 'id_termindayamas']);
    }
}
