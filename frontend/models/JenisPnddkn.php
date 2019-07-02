<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jenis_pnddkn".
 *
 * @property int $id_jns_pnddkn
 * @property string $jns_pnddkn
 */
class JenisPnddkn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_pnddkn';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jns_pnddkn'], 'required'],
            [['jns_pnddkn'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jns_pnddkn' => 'Id Jns Pnddkn',
            'jns_pnddkn' => 'Pendidikan Terakhir',
        ];
    }
}
