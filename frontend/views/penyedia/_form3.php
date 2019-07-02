<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use frontend\models\JenisPenyedia;
use frontend\models\JenisPnddkn;
use frontend\models\StatusPenyedia;
use frontend\models\Provinces;
use frontend\models\Regencies;
use frontend\models\JenisBintang;

/* @var $this yii\web\View */
/* @var $model frontend\models\Penyedia */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="pengadaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis_penyedia')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(JenisPenyedia::find()->all(), 'id_jns_penyedia', 'jenis_penyedia'), 
    'options' => ['placeholder' => '-Pilih jenis penyedia-', 'id' => 'jenisPenyedia-id_jns_penyedia'],
    ]); ?>
                
    <?= $form->field($model, 'nama_bu')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'status_bu')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(StatusPenyedia::find()->all(), 'id_stts_penyedia', 'stts_penyedia'),
    'options' => ['placeholder' => '-Pilih status penyedia-', 'id' => 'statusPenyedia-stts_penyedia'],
    ]); ?> -->

    <?= $form->field($model, 'npwp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lama_usaha')->textInput()?>

    <!-- <?= $form->field($model, 'pendidikan_terakhir')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(JenisPnddkn::find()->all(), 'id_jns_pnddkn', 'jns_pnddkn'),
    'options' => ['placeholder' => '-Pilih pendidikan terakhir-', 'id' => 'jenisPnddkn-id_jns_pnddkn'],
    ]); ?> -->

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provinsi')->dropDownList(
     ArrayHelper::map(Provinces::find()->all(), 'id', 'prov_name'),
     [ 'prompt' => '-Pilih Propinsi-',
     'class' => 'dependent-input form-control',
     'onchange' => '$.post("index.php?r=penyedia/provinsi&id='.'"+$(this).val(), function(data) {
     $("select#penyedia-kab_or_kota").html(data);
     });'
    ]); ?>

    <?= $form->field($model, 'kab_or_kota')->dropDownList(
    [
    'prompt' => '-Pilih Kabupaten/Kota-',
    ]); ?>

    <?= $form->field($model, 'nama_penyedia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telepon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'handphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faximile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_pos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

