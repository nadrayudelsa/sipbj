<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Penyedia;

/**
 * PenyediaSearch represents the model behind the search form of `frontend\models\Penyedia`.
 */
class PenyediaSearch extends Penyedia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penyedia', 'lama_usaha'], 'integer'],
            [['nama_penyedia', 'nama_bu', 'jenis_penyedia', 'status_bu', 'npwp', 'no_ktp','email', 'pendidikan_terakhir', 'alamat', 'provinsi', 'kab_or_kota', 'telepon', 'handphone', 'faximile', 'kode_pos', 'website', 'bukti_pengurus', 'bukti_SIU', 'bukti_npwp', 'bukti_domisili', 'bukti_akta', 'bukti_pajak', 'tanggal_kuitansi', 'tanggal_masuk'], 'safe'],
            [['prestasi'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Penyedia::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_penyedia' => $this->id_penyedia,
            'lama_usaha' => $this->lama_usaha,
            'prestasi' => $this->prestasi,
            'tanggal_kuitansi' => $this->tanggal_kuitansi,
            'tanggal_masuk' => $this->tanggal_masuk,
        ]);

        $query->andFilterWhere(['like', 'nama_penyedia', $this->nama_penyedia])
            ->andFilterWhere(['like', 'nama_bu', $this->nama_bu])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'jenis_penyedia', $this->jenis_penyedia])
            ->andFilterWhere(['like', 'status_bu', $this->status_bu])
            ->andFilterWhere(['like', 'npwp', $this->npwp])
            ->andFilterWhere(['like', 'no_ktp', $this->no_ktp])
            ->andFilterWhere(['like', 'pendidikan_terakhir', $this->pendidikan_terakhir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'provinsi', $this->provinsi])
            ->andFilterWhere(['like', 'kab_or_kota', $this->kab_or_kota])
            ->andFilterWhere(['like', 'telepon', $this->telepon])
            ->andFilterWhere(['like', 'handphone', $this->handphone])
            ->andFilterWhere(['like', 'faximile', $this->faximile])
            ->andFilterWhere(['like', 'kode_pos', $this->kode_pos])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'bukti_pengurus', $this->bukti_pengurus])
            ->andFilterWhere(['like', 'bukti_SIU', $this->bukti_SIU])
            ->andFilterWhere(['like', 'bukti_npwp', $this->bukti_npwp])
            ->andFilterWhere(['like', 'bukti_domisili', $this->bukti_domisili])
            ->andFilterWhere(['like', 'bukti_akta', $this->bukti_akta])
            ->andFilterWhere(['like', 'bukti_pajak', $this->bukti_pajak]);

        return $dataProvider;
    }
}
