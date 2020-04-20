<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LotSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="lot-search">
<div class="card mb-3">


    <div class="card-header">
        <b>Поиск</b>
    </div>
    <div class="card-body">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'description', ['template' => '{input}'])->textInput(['placeholder' => 'Описание']) ?>

    <?php // echo $form->field($model, 'start_price') ?>

    <div class="form-group row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col">
                    <?= $form->field($model, 'priceMin', ['template' => '{input}'])->textInput(['placeholder' => 'Цена MIN']) ?>
                </div>
                <h4> - </h4>
                <div class="col">
                    <?= $form->field($model, 'priceMax',  ['template' => '{input}'])->textInput(['placeholder' => 'Цена MAX']) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-block btn-outline-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>