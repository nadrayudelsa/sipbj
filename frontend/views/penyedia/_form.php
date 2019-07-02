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
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<section class="content">
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <!-- /.box-header -->
        <div class="box-body">
          
          <div class="row">
            
            <div class="col-md-6">

              <div class="form-group">
                
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
            </div>
            <!-- /.col -->
          </div>

          <div class="col-md-6">
              <div class="form-group">

                 <?= $form->field($model, 'nama_penyedia')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'telepon')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'handphone')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'faximile')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'kode_pos')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

                <!-- <?= $form->field($model, 'prestasi')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map(JenisBintang::find()->all(), 'id_bintang', 'jenis_bintang'),
                    'options' => ['placeholder' => '-Pilih prestasi-', 'id_bintang' => 'jenisBintang-id_bintang'],
                ]); ?> -->
                
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="form-group", style="text-align:center">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
         </div>
          <?php ActiveForm::end(); ?> 
        
      </div>
      <!-- /.box -->
       
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>


<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->

    