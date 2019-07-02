<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\JenisPenyedia;
use frontend\models\StatusPenyedia;
use frontend\models\Provinces;

/* @var $this yii\web\View */
/* @var $model frontend\models\Penyedia */

// $this->title = $model->id_penyedia;
$this->title = $model->nama_bu;
$this->params['breadcrumbs'][] = ['label' => 'Penyedia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

<section class="content">
    <p>
        <?= Html::a('Back', ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Edit', ['update', 'id' => $model->id_penyedia], ['class' => 'btn btn-primary']) ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->id_penyedia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
        
    </p>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <h1 class="box-title">Detail Daftar Penyedia : <?= Html::encode($this->title) ?></h1> <br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        // 'id_penyedia',
                        'jenisPenyedia.jenis_penyedia',
                        'nama_bu',
                        'alamat',
                        [
                            'attribute' => 'jenisBintang.jenis_bintang',
                            'label' => 'Prestasi',
                            'contentOptions' => ['style' => 'color:#ff9900' ],
                        ],

                        [
                            'attribute' => 'statusPenyedia.stts_penyedia',
                            'label' => 'Status',
                            'contentOptions' => ['style' => 'font-style: italic; color:#3d85c6' ],
                        ],
                        'npwp',
                        'email:email',
                        'lama_usaha',
                        'alamat',
                        'jenisProvinsi.prov_name',
                        'jenisKabKot.name',
                        'nama_penyedia',
                        'no_ktp',
                        // 'jenisPnddkn.jns_pnddkn',
                        'telepon',
                        'handphone',
                        'faximile',
                        'kode_pos',
                        'website',

                        // 'bukti_pengurus',
                        // 'bukti_SIU',
                        // 'bukti_npwp',
                        // 'bukti_domisili',
                        // 'bukti_akta',
                        // 'bukti_pajak',
                        // 'prestasi',
                        // 'tanggal_kuitansi',
                        // 'status_penyedia',
                        // 'tanggal_masuk',
                    ],
                    

                ]) ?>
            </div>
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
    </div>
        <!-- /.col -->
</div>
      <!-- /.row -->
</section>
 

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



