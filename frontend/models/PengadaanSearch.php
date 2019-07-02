<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pengadaan;

/**
 * PengadaanSearch represents the model behind the search form of `frontend\models\Pengadaan`.
 */
class PengadaanSearch extends Pengadaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pengadaan', 'jumlah_pengadaan'], 'integer'],
            [['tanggal_pengadaan','no_pengadaan','kode_kegiatan', 'kode_output', 'kode_MAK', 'no_DIPA', 'tanggal_DIPA', 'nama_kegiatan', 'keterangan_pengadaan', 'kode_unit_kerja', 'file_pendukung', 'file_HPS', 'jenis_paket', 'nilai_ppn', 'kategori_barangjasa', 'nama_barangjasa', 'spesifikasi_barangjasa', 'jenis_satuan_pengadaan', 'status_pengadaan', 'pejabat_pengadaan', 'status_kontrak', 'tanggal_statuspengadaan', 'nama_penyedia', 'waktu_pelaksanaan', 'tanggal_pelaksanaan1', 'tanggal_pelaksanaan2', 'waktu_pemeliharaan', 'nomor_dokumen', 'tanggal_dokumen'], 'safe'],
            [['harga_satuan_pengadaan', 'total_pengadaan', 'total_dg_PPN', 'nilai_kontrak'], 'number'],
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
        $query = Pengadaan::find();

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
            'id_pengadaan' => $this->id_pengadaan,
            'no_pengadaan' => $this->no_pengadaan,
            'tanggal_pengadaan' => $this->tanggal_pengadaan,
            'tanggal_DIPA' => $this->tanggal_DIPA,
            'jumlah_pengadaan' => $this->jumlah_pengadaan,
            'harga_satuan_pengadaan' => $this->harga_satuan_pengadaan,
            'total_pengadaan' => $this->total_pengadaan,
            'total_dg_PPN' => $this->total_dg_PPN,
            'tanggal_statuspengadaan' => $this->tanggal_statuspengadaan,
            'nilai_kontrak' => $this->nilai_kontrak,
            'waktu_pelaksanaan' => $this->waktu_pelaksanaan,
            'tanggal_pelaksanaan1' => $this->tanggal_pelaksanaan1,
            'tanggal_pelaksanaan2' => $this->tanggal_pelaksanaan2,
            'waktu_pemeliharaan' => $this->waktu_pemeliharaan,
            'tanggal_dokumen' => $this->tanggal_dokumen,
        ]);

        $query->andFilterWhere(['like', 'kode_kegiatan', $this->kode_kegiatan])
            ->andFilterWhere(['like', 'kode_output', $this->kode_output])
            ->andFilterWhere(['like', 'kode_MAK', $this->kode_MAK])
            ->andFilterWhere(['like', 'no_DIPA', $this->no_DIPA])
            ->andFilterWhere(['like', 'nama_kegiatan', $this->nama_kegiatan])
            ->andFilterWhere(['like', 'keterangan_pengadaan', $this->keterangan_pengadaan])
            ->andFilterWhere(['like', 'kode_unit_kerja', $this->kode_unit_kerja])
            ->andFilterWhere(['like', 'file_pendukung', $this->file_pendukung])
            ->andFilterWhere(['like', 'file_HPS', $this->file_HPS])
            ->andFilterWhere(['like', 'jenis_paket', $this->jenis_paket])
            ->andFilterWhere(['like', 'nilai_ppn', $this->nilai_ppn])
            ->andFilterWhere(['like', 'kategori_barangjasa', $this->kategori_barangjasa])
            ->andFilterWhere(['like', 'nama_barangjasa', $this->nama_barangjasa])
            ->andFilterWhere(['like', 'spesifikasi_barangjasa', $this->spesifikasi_barangjasa])
            ->andFilterWhere(['like', 'jenis_satuan_pengadaan', $this->jenis_satuan_pengadaan])
            ->andFilterWhere(['like', 'status_pengadaan', $this->status_pengadaan])
            ->andFilterWhere(['like', 'pejabat_pengadaan', $this->pejabat_pengadaan])
            ->andFilterWhere(['like', 'status_kontrak', $this->status_kontrak])
            ->andFilterWhere(['like', 'nama_penyedia', $this->nama_penyedia])
            ->andFilterWhere(['like', 'nomor_dokumen', $this->nomor_dokumen]);

        return $dataProvider;
    }
}
