<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Penyedia */

$this->title = 'Edit Data Penyedia: ' . $model->nama_bu;
$this->params['breadcrumbs'][] = ['label' => 'Penyedia', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_bu, 'url' => ['view', 'id' => $model->id_penyedia]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="penyedia-update">

    <!-- <h1>Edit Data <?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
