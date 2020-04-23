<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Debtor */

$this->title = 'Create Debtor';
$this->params['breadcrumbs'][] = ['label' => 'Debtors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debtor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
