<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jenis_bintang".
 *
 * @property int $id_bintang
 * @property string $jenis_bintang
 */
class JenisBintang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_bintang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bintang', 'jenis_bintang'], 'required'],
            [['id_bintang'], 'integer'],
            [['jenis_bintang'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bintang' => 'Id Bintang',
            'jenis_bintang' => 'Prestasi',
        ];
    }
}
