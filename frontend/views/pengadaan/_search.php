<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PengadaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengadaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pengadaan') ?>

    <?= $form->field($model, 'tanggal_pengadaan') ?>

    <?= $form->field($model, 'kode_kegiatan') ?>

    <?= $form->field($model, 'kode_output') ?>

    <?= $form->field($model, 'kode_MAK') ?>

    <?php // echo $form->field($model, 'no_DIPA') ?>

    <?php // echo $form->field($model, 'tanggal_DIPA') ?>

    <?php // echo $form->field($model, 'nama_kegiatan') ?>

    <?php // echo $form->field($model, 'keterangan_pengadaan') ?>

    <?php // echo $form->field($model, 'kode_unit_kerja') ?>

    <?php // echo $form->field($model, 'file_pendukung') ?>

    <?php // echo $form->field($model, 'file_HPS') ?>

    <?php // echo $form->field($model, 'jenis_paket') ?>

    <?php // echo $form->field($model, 'nilai_ppn') ?>

    <?php // echo $form->field($model, 'kategori_barangjasa') ?>

    <?php // echo $form->field($model, 'nama_barangjasa') ?>

    <?php // echo $form->field($model, 'spesifikasi_barangjasa') ?>

    <?php // echo $form->field($model, 'jumlah_pengadaan') ?>

    <?php // echo $form->field($model, 'jenis_satuan_pengadaan') ?>

    <?php // echo $form->field($model, 'harga_satuan_pengadaan') ?>

    <?php // echo $form->field($model, 'total_pengadaan') ?>

    <?php // echo $form->field($model, 'total_dg_PPN') ?>

    <?php // echo $form->field($model, 'status_pengadaan') ?>

    <?php // echo $form->field($model, 'pejabat_pengadaan') ?>

    <?php // echo $form->field($model, 'status_kontrak') ?>

    <?php // echo $form->field($model, 'tanggal_statuspengadaan') ?>

    <?php // echo $form->field($model, 'nama_penyedia') ?>

    <?php // echo $form->field($model, 'nilai_kontrak') ?>

    <?php // echo $form->field($model, 'waktu_pelaksanaan') ?>

    <?php // echo $form->field($model, 'tanggal_pelaksanaan1') ?>

    <?php // echo $form->field($model, 'tanggal_pelaksanaan2') ?>

    <?php // echo $form->field($model, 'waktu_pemeliharaan') ?>

    <?php // echo $form->field($model, 'nomor_dokumen') ?>

    <?php // echo $form->field($model, 'tanggal_dokumen') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
