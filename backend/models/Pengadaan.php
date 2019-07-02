<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengadaan".
 *
 * @property int $id_pengadaan
 * @property string $tanggal_pengadaan
 * @property string $kode_kegiatan
 * @property string $kode_output
 * @property string $kode_MAK
 * @property string $no_DIPA
 * @property string $tanggal_DIPA
 * @property string $nama_kegiatan
 * @property string $keterangan_pengadaan
 * @property string $kode_unit_kerja
 * @property string $file_pendukung
 * @property string $file_HPS
 * @property string $jenis_paket
 * @property string $nilai_ppn
 * @property string $kategori_barangjasa
 * @property string $nama_barangjasa
 * @property string $spesifikasi_barangjasa
 * @property int $jumlah_pengadaan
 * @property string $jenis_satuan_pengadaan
 * @property string $harga_satuan_pengadaan
 * @property string $total_pengadaan
 * @property string $total_dg_PPN
 * @property string $status_pengadaan
 * @property string $pejabat_pengadaan
 * @property string $status_kontrak
 * @property string $tanggal_statuspengadaan
 * @property string $nama_penyedia
 * @property string $nilai_kontrak
 * @property string $waktu_pelaksanaan
 * @property string $tanggal_pelaksanaan1
 * @property string $tanggal_pelaksanaan2
 * @property string $waktu_pemeliharaan
 * @property string $nomor_dokumen
 * @property string $tanggal_dokumen
 */
class Pengadaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengadaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_pengadaan', 'nama_kegiatan', 'keterangan_pengadaan', 'kode_unit_kerja', 'kategori_barangjasa', 'nama_barangjasa', 'spesifikasi_barangjasa', 'jumlah_pengadaan', 'jenis_satuan_pengadaan', 'nama_penyedia', 'waktu_pelaksanaan'], 'required'],
            [['tanggal_pengadaan', 'tanggal_DIPA', 'tanggal_statuspengadaan', 'waktu_pelaksanaan', 'tanggal_pelaksanaan1', 'tanggal_pelaksanaan2', 'waktu_pemeliharaan', 'tanggal_dokumen'], 'safe'],
            [['jumlah_pengadaan'], 'integer'],
            [['harga_satuan_pengadaan', 'total_pengadaan', 'total_dg_PPN', 'nilai_kontrak'], 'number'],
            [['kode_kegiatan'], 'string', 'max' => 4],
            [['kode_output'], 'string', 'max' => 10],
            [['kode_MAK', 'no_DIPA'], 'string', 'max' => 6],
            [['nama_kegiatan', 'nomor_dokumen'], 'string', 'max' => 30],
            [['keterangan_pengadaan'], 'string', 'max' => 200],
            [['kode_unit_kerja', 'nilai_ppn', 'jenis_satuan_pengadaan', 'status_pengadaan', 'pejabat_pengadaan', 'status_kontrak'], 'string', 'max' => 2],
            [['file_pendukung', 'file_HPS', 'spesifikasi_barangjasa'], 'string', 'max' => 300],
            [['jenis_paket', 'kategori_barangjasa'], 'string', 'max' => 3],
            [['nama_barangjasa'], 'string', 'max' => 50],
            [['nama_penyedia'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengadaan' => 'Id Pengadaan',
            'tanggal_pengadaan' => 'Tanggal Pengadaan',
            'kode_kegiatan' => 'Kode Kegiatan',
            'kode_output' => 'Kode Output',
            'kode_MAK' => 'Kode Mak',
            'no_DIPA' => 'No Dipa',
            'tanggal_DIPA' => 'Tanggal Dipa',
            'nama_kegiatan' => 'Nama Kegiatan',
            'keterangan_pengadaan' => 'Keterangan Pengadaan',
            'kode_unit_kerja' => 'Kode Unit Kerja',
            'file_pendukung' => 'File Pendukung',
            'file_HPS' => 'File Hps',
            'jenis_paket' => 'Jenis Paket',
            'nilai_ppn' => 'Nilai Ppn',
            'kategori_barangjasa' => 'Kategori Barangjasa',
            'nama_barangjasa' => 'Nama Barangjasa',
            'spesifikasi_barangjasa' => 'Spesifikasi Barangjasa',
            'jumlah_pengadaan' => 'Jumlah Pengadaan',
            'jenis_satuan_pengadaan' => 'Jenis Satuan Pengadaan',
            'harga_satuan_pengadaan' => 'Harga Satuan Pengadaan',
            'total_pengadaan' => 'Total Pengadaan',
            'total_dg_PPN' => 'Total Dg Ppn',
            'status_pengadaan' => 'Status Pengadaan',
            'pejabat_pengadaan' => 'Pejabat Pengadaan',
            'status_kontrak' => 'Status Kontrak',
            'tanggal_statuspengadaan' => 'Tanggal Statuspengadaan',
            'nama_penyedia' => 'Nama Penyedia',
            'nilai_kontrak' => 'Nilai Kontrak',
            'waktu_pelaksanaan' => 'Waktu Pelaksanaan',
            'tanggal_pelaksanaan1' => 'Tanggal Pelaksanaan1',
            'tanggal_pelaksanaan2' => 'Tanggal Pelaksanaan2',
            'waktu_pemeliharaan' => 'Waktu Pemeliharaan',
            'nomor_dokumen' => 'Nomor Dokumen',
            'tanggal_dokumen' => 'Tanggal Dokumen',
        ];
    }
}
