<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kode_kegiatan".
 *
 * @property string $id_kegiatan
 * @property string $kode_kegiatan
 */
class KodeKegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kode_kegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kegiatan', 'kode_kegiatan'], 'required'],
            [['id_kegiatan'], 'string', 'max' => 4],
            [['kode_kegiatan'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kegiatan' => 'Id Kegiatan',
            'kode_kegiatan' => 'Kode Kegiatan',
        ];
    }
}
