<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penyedia".
 *
 * @property int $id_penyedia
 * @property string $nama_penyedia
 * @property string $nama_bu
 * @property string $jenis_penyedia
 * @property string $status_bu
 * @property string $npwp
 * @property string $no_ktp
 * @property string $pendidikan_terakhir
 * @property int $lama_usaha
 * @property string $alamat
 * @property string $provinsi
 * @property string $kab_or_kota
 * @property string $email
 * @property string $telepon
 * @property string $handphone
 * @property string $faximile
 * @property string $kode_pos
 * @property string $website
 * @property string $bukti_pengurus
 * @property string $bukti_SIU
 * @property string $bukti_npwp
 * @property string $bukti_domisili
 * @property string $bukti_akta
 * @property string $bukti_pajak
 * @property double $prestasi
 * @property string $tanggal_kuitansi
 * @property string $tanggal_masuk
 */
class Penyedia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $bukti_pengurus;
    public $bukti_SIU;
    public $bukti_npwp;
    public $bukti_domisili;
    public $bukti_akta;
    public $bukti_pajak;

    public static function tableName()
    {
        return 'penyedia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_penyedia', 'nama_bu', 'status_bu', 'npwp', 'no_ktp', 'lama_usaha', 'provinsi', 'kab_or_kota', 'email', 'handphone','tanggal_kuitansi', 'tanggal_masuk'], 'required'],
            [['lama_usaha'], 'integer'],
            [['prestasi'], 'number'],
            [['tanggal_kuitansi', 'tanggal_masuk'], 'safe'],
            [['nama_penyedia'], 'string', 'max' => 60],
            [[ 'bukti_pengurus', 'bukti_SIU', 'bukti_npwp', 'bukti_domisili', 'bukti_akta', 'bukti_pajak'], 'file', 'extensions' => 'pdf,jpg,jpeg,png', 'skipOnEmpty' => false ,'maxSize' => 4096000, 'tooBig' => 'Limit is 500KB'],
            [['nama_bu', 'email'], 'string', 'max' => 50],
            [['jenis_penyedia', 'status_bu'], 'string', 'max' => 2],
            [['npwp'], 'string', 'max' => 25],
            [['no_ktp', 'pendidikan_terakhir'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 255],
            [['provinsi', 'kab_or_kota'], 'string', 'max' => 4],
            [['telepon', 'handphone'], 'string', 'max' => 15],
            [['faximile'], 'string', 'max' => 30],
            [['kode_pos'], 'string', 'max' => 8],
            [['website'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penyedia' => 'Id Penyedia',
            'nama_penyedia' => 'Nama Penanggungjawab Usaha',
            'nama_bu' => 'Nama Badan Usaha',
            'jenis_penyedia' => 'Jenis Badan Usaha',
            'status_bu' => 'Status Badan Usaha',
            'npwp' => 'NPWP',
            'no_ktp' => 'No KTP',
            'pendidikan_terakhir' => 'Pendidikan Terakhir',
            'lama_usaha' => 'Lama Usaha (tahun)',
            'alamat' => 'Alamat',
            'provinsi' => 'Provinsi',
            'kab_or_kota' => 'Kabupaten/Kota',
            'email' => 'Email',
            'telepon' => 'Telepon',
            'handphone' => 'Handphone',
            'faximile' => 'Faximile',
            'kode_pos' => 'Kode Pos',
            'website' => 'Website',
            'bukti_pengurus' => 'Bukti Pengurus',
            'bukti_SIU' => 'Bukti Surat Izin Usaha',
            'bukti_npwp' => 'Bukti Npwp',
            'bukti_domisili' => 'Bukti Domisili',
            'bukti_akta' => 'Bukti Akta',
            'bukti_pajak' => 'Bukti Pajak',
            'prestasi' => 'Prestasi',
            'tanggal_kuitansi' => 'Tanggal Kuitansi',
            'tanggal_masuk' => 'Tanggal Pendaftaran',
            'file1' => 'Upload Bukti Pengurus',
            'file2' => 'Upload Surat Izin Usaha',
            'file3' => 'Upload NPWP',
            'file4' => 'Upload Domisili',
            'file5' => 'Upload Akta',
            'file6' => 'Upload Pajak',
        ];
    }

    public function getJenisPenyedia(){
        return $this-> hasOne(JenisPenyedia::className(),['id_jns_penyedia' => 'jenis_penyedia']); 
    }

    public function getJenisBintang(){
        return $this-> hasOne(JenisBintang::className(),['id_bintang' => 'prestasi']);   
    }

    public function getStatusPenyedia(){
        return $this-> hasOne(StatusPenyedia::className(), ['id_stts_penyedia' => 'status_bu']);
    }

    public function getJenisProvinsi(){
        return $this-> hasOne(Provinces::className(), ['id' => 'provinsi']);
    }

    public function getJenisKabKot(){
        return $this-> hasOne(Regencies::className(), ['id' => 'kab_or_kota']);
    }


}
