<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LotSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="lot-search">
<div class="card">


    <div class="card-header">
        Поиск
    </div>
    <div class="card-body">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'message_number') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'start_price') ?>

    <?= $form->field($model, 'priceMin') ?>
    <?= $form->field($model, 'priceMax') ?>

    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>