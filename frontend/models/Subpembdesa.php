<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "subpembdesa".
 *
 * @property integer $id_subpembdesa
 * @property string $subbidang
 *
 * @property Pembangunandesa[] $pembangunandesas
 */
class Subpembdesa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subpembdesa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subbidang'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_subpembdesa' => 'Id Subpembdesa',
            'subbidang' => 'Subbidang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPembangunandesas()
    {
        return $this->hasMany(Pembangunandesa::className(), ['jenis_pembangunan_desa' => 'id_subpembdesa']);
    }
}
