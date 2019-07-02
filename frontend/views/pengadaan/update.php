<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pengadaan */

$this->title = 'Update Pengadaan: ' . $model->id_pengadaan;
$this->params['breadcrumbs'][] = ['label' => 'Pengadaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pengadaan, 'url' => ['view', 'id' => $model->id_pengadaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengadaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
