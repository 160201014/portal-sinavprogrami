<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sinav */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sinav-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tarih')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akademisyen')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
