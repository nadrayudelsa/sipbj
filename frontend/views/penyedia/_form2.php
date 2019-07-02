<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Penyedia */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="content">
<head>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">

        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            
            <!-- <div class="box-header with-border">
              <h1 class="box-title">Upload Bukti Form <?= Html::encode($this->title) ?></h1>
            </div> -->
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <div class="form-group">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                    <?= $form->field($model, 'bukti_pengurus')->fileInput(); ?>

                    <!-- <?= $form->field($model, 'bukti_SIU')->fileInput() ?>

                    <?= $form->field($model, 'bukti_npwp')->fileInput() ?>

                    <?= $form->field($model, 'bukti_domisili')->fileInput() ?>

                    <?= $form->field($model, 'bukti_akta')->fileInput() ?>

                    <?= $form->field($model, 'bukti_pajak')->fileInput() ?>   -->

                </div>
                    <div class="form-group", style= "text-align:center">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-primary', ]) ?>
                    </div>
                     <?php ActiveForm::end(); ?>
            </div>

        </div>

    </div>
        
       

</section>
</body>


<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
