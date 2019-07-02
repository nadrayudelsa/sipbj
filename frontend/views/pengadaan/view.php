<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pengadaan */

// $this->title = $model->id_pengadaan;
$this->title = 'Pengadaan Langsung';
$this->params['breadcrumbs'][] = ['label' => 'Pengadaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pengadaan-view">
    
    <p>
        <?= Html::a('Close', ['index'], ['class' => 'btn btn-primary']) ?>
        <!-- <?= Html::a('Delete', ['delete', 'id' => $model->id_pengadaan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>
    <h2> Detail Pengunguman <?= Html::encode($this->title) ?></h2>
    <h4> Nomor : <?= Html::encode($model->no_pengadaan) ?> </h4>
    <h4> Tanggal : <?= Html::encode($model->tanggal_pengadaan) ?> </h4>
    <br>
    

    <p>Pejabat pengadaan BPS Pusat mengungumkan nama penyedia sebagai pelaksana pengadaan langsung sebagai berikut: </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pengadaan',
        ],
        'attributes' => [
            'no_DIPA',
            'tanggal_DIPA',
            'tahunPengadaan',
            'nama_barangjasa',
            'nilai_kontrak'
        ]
    ]) ?>




</div>
