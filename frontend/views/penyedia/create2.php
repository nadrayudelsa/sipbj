<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Penyedia */

$this->title = 'Penyedia';
$this->params['breadcrumbs'][] = ['label' => 'Penyedia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyedia-create">

    <h1>Input <?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>

</div>
