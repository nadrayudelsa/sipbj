<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PengadaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengadaan Langsung';
 $this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengadaan-index">

    <h2> Pengunguman <?= Html::encode($this->title) ?></h2>

    <!-- <p>
        <?= Html::a('Create Pengadaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        // 'responsive' => true,
        // 'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '', 'defaultTimeZone' => 'Europe/Paris', 'dateTimeFormat' => 'd-M-Y H:i:s'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'nama_kegiatan',
                // 'contentOptions' => ['style' => 'width:250px;']
            ],
            [
                'attribute' => 'kode_kegiatan',
                'value' => 'kodeKegiatan.kode_kegiatan',
                // 'contentOptions' => ['style' => 'width:100px;']
            ],
            [
                'attribute' => 'nama_penyedia',
                // 'contentOptions' => ['style' => 'width:250px;']
            ],
            [
                'attribute' => 'nilai_kontrak',
                'value' => function ($Pengadaan){
                    return $Pengadaan->Buatrp();
                },
                // 'contentOptions' => ['style' => 'width:250px;']
            ],
            [
                'attribute' => 'tahunPengadaan',
                'label' => 'Tahun Anggaran',
                // 'contentOptions' => ['style' => 'width:250px;']
            ],
            ['class' => 'yii\grid\ActionColumn',
            'template' => '{view}'
            ],
        ],
    ]); ?>


</div>
