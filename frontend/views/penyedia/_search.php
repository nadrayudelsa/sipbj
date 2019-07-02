<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PenyediaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penyedia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_penyedia') ?>

    <?= $form->field($model, 'nama_penyedia') ?>

    <?= $form->field($model, 'nama_bu') ?>

    <?= $form->field($model, 'jenis_penyedia') ?>

    <?= $form->field($model, 'status_bu') ?>

    <?php // echo $form->field($model, 'npwp') ?>

    <?php // echo $form->field($model, 'no_ktp') ?>

    <?php // echo $form->field($model, 'pendidikan_terakhir') ?>

    <?php // echo $form->field($model, 'lama_usaha') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'provinsi') ?>

    <?php // echo $form->field($model, 'kab_or_kota') ?>

    <?php // echo $form->field($model, 'telepon') ?>

    <?php // echo $form->field($model, 'handphone') ?>

    <?php // echo $form->field($model, 'faximile') ?>

    <?php // echo $form->field($model, 'kode_pos') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'bukti_pengurus') ?>

    <?php // echo $form->field($model, 'bukti_SIU') ?>

    <?php // echo $form->field($model, 'bukti_npwp') ?>

    <?php // echo $form->field($model, 'bukti_domisili') ?>

    <?php // echo $form->field($model, 'bukti_akta') ?>

    <?php // echo $form->field($model, 'bukti_pajak') ?>

    <?php // echo $form->field($model, 'prestasi') ?>

    <?php // echo $form->field($model, 'tanggal_kuitansi') ?>

    <?php // echo $form->field($model, 'status_penyedia') ?>

    <?php // echo $form->field($model, 'tanggal_masuk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
