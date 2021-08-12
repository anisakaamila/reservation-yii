<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\OrderDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'id_order')->textInput() ?>

    <?= $form->field($model, 'id_item')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
