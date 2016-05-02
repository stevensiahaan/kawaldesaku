<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bidang".
 *
 * @property integer $id_bidang
 * @property string $nama_bidang
 */
class Bidang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bidang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_bidang'], 'required'],
            [['nama_bidang'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_bidang' => 'Id Bidang',
            'nama_bidang' => 'Nama Bidang',
        ];
    }
}
