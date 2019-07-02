<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pengadaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengadaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal_pengadaan')->textInput() ?>

    <?= $form->field($model, 'kode_kegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_output')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_MAK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_DIPA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_DIPA')->textInput() ?>

    <?= $form->field($model, 'nama_kegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan_pengadaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_unit_kerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_pendukung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_HPS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_paket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai_ppn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori_barangjasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_barangjasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spesifikasi_barangjasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_pengadaan')->textInput() ?>

    <?= $form->field($model, 'jenis_satuan_pengadaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga_satuan_pengadaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_pengadaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_dg_PPN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_pengadaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pejabat_pengadaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_kontrak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_statuspengadaan')->textInput() ?>

    <?= $form->field($model, 'nama_penyedia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai_kontrak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'waktu_pelaksanaan')->textInput() ?>

    <?= $form->field($model, 'tanggal_pelaksanaan1')->textInput() ?>

    <?= $form->field($model, 'tanggal_pelaksanaan2')->textInput() ?>

    <?= $form->field($model, 'waktu_pemeliharaan')->textInput() ?>

    <?= $form->field($model, 'nomor_dokumen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_dokumen')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
