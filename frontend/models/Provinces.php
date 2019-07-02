<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "provinces".
 *
 * @property string $id
 * @property string $name
 *
 * @property Regencies[] $regencies
 */
class Provinces extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provinces';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'prov_name'], 'required'],
            [['id'], 'string', 'max' => 2],
            [['prov_name'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prov_name' => 'Provinsi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegencies()
    {
        return $this->hasMany(Regencies::className(), ['province_id' => 'id']);
    }
}
