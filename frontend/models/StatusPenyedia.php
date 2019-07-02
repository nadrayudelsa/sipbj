<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "status_penyedia".
 *
 * @property int $id_status
 * @property string $status_penyedia
 */
class StatusPenyedia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_penyedia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stts_penyedia'], 'required'],
            [['stts_penyedia'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_stts_penyedia' => 'Id Status',
            'stts_penyedia' => 'Status Penyedia',
        ];
    }
}
