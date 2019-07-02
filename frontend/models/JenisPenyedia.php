<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jenis_penyedia".
 *
 * @property int $id_penyedia
 * @property string $jenis_penyedia
 */
class JenisPenyedia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_penyedia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_penyedia'], 'required'],
            [['jenis_penyedia'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jns_penyedia' => 'Id Penyedia',
            'jenis_penyedia' => 'Jenis Badan Usaha',
        ];
    }
}
