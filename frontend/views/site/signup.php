<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Buat Akun Eksternal';
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#">Si-<b>PBJ</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Daftar sebagai penyedia/pelaku usaha</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true])?>
        
        <?= $form->field($model, 'email') ?>

        <?= $form->field($model, 'password')->passwordInput() ?>        

        <div class="row">
            <div class="col-xs-8  ">
                <?= Html::a('kembali', ['site/login']) ?>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= Html::submitButton('Daftar', ['class' => 'btn btn-primary  btn-block btn-flat', 'name' => 'signup-button']) ?>
            </div>
            <!-- /.col -->
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
