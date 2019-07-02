<?php

use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\helpers\Html;
use frontend\models\JenisPenyedia;
use frontend\models\JenisBintang;
// use Kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PenyediaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Penyedia';
$this->params['breadcrumbs'][] = $this->title;
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
       <?= Html::a('Input Penyedia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- <div class="box-header">
                <h1 class="box-title">Daftar <?= Html::encode($this->title) ?></h1> <br>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        // 'id_penyedia',
                        [
                            'attribute' => 'jenis_penyedia',
                            'value' => 'jenisPenyedia.jenis_penyedia',
                            'label' => 'Badan Usaha',
                            'filter'=> ArrayHelper::map(JenisPenyedia::find()->asArray()->all(), 'id_jns_penyedia', 'jenis_penyedia'),
                        ],
                        [
                            'attribute' => 'nama_penyedia',
                            'label' => 'Nama Perusahaan'
                        ],
                        [
                            'attribute' => 'email',
                            'label' => 'Email',
                            'format' => 'email'
                        ],
                        [
                            'attribute' => 'alamat',
                            'label' => 'Alamat'  
                        ],
                        [
                            'attribute' => 'prestasi',
                            'label' => 'Prestasi',
                            'value' => 'jenisBintang.jenis_bintang',
                            'filter' => ArrayHelper::map(JenisBintang::find()->asArray()->all(), 'id_bintang', 'jenis_bintang'),

                        ],
                        [
                            'attribute' => 'bukti_pengurus',
                            'format' => 'html',    
                            'value' => function ($data) {
                                return Html::img('../../../uploads/'. $data['bukti_pengurus'],
                                    ['width' => '70px']);
                             },
                        ],
                        // [
                        // 'attribute' => 'bukti_pengurus',
                        // // 'format' => 'Html',    
                        // 'value' => function ($data) {
                        //     return Html::img('/'.$data['bukti_pengurus'],
                        //         ['width' => '70px']);
                        //  },
                        // ],
                        // 'nama_bu',
                        // 'jenis_penyedia',
                        // 'status_bu',
                        // 'npwp',
                        // 'no_ktp',
                        // 'pendidikan_terakhir',
                        // 'lama_usaha',
                        // 'alamat',
                        // 'provinsi',
                        // 'kab_or_kota',
                        // 'telepon',
                        // 'handphone',
                        // 'faximile',
                        // 'kode_pos',
                        // 'website',
                        // 'bukti_pengurus',
                        // 'bukti_SIU',
                        // 'bukti_npwp',
                        // 'bukti_domisili',
                        // 'bukti_akta',
                        // 'bukti_pajak',
                        // 'prestasi',
                        // 'tanggal_kuitansi',
                        // 'status_penyedia',
                        [
                            'attribute' => 'tanggal_masuk',
                            'label' => 'Tanggal Pendaftaran'  
                        ],
                        // 'tanggal_masuk',

                        ['class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {update}'
                    ],
                    ],
                ]); ?>
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
