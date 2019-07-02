<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Penyedia */

$this->title = 'Upload Bukti Form : ' . $model->nama_bu;
// $this->params['breadcrumbs'][] = ['label' => 'Penyedia', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_bu, 'url' => ['view', 'id' => $model->id_penyedia]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="penyedia-update">

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>

</div>
