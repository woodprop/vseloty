<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Message */

$this->title = 'Сообщение о торгах №' . $model->message_number;
$this->params['breadcrumbs'][] = ['label' => 'Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container mt-5">
    <div class="message-view">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'message_number',
            'date_pub',
            'inn',
            'auction_type',
            'date_start',
            'place',
            [
                'attribute' => 'link',
                'value' => function($data){
                    return Html::a('Ссылка на ФедРесурс', str_replace('http:', 'http://', $data->link), ['target' => '_blank']);
                },
                'format' => 'raw',
            ],

            'description:ntext',
        ],
    ]) ?>

</div>
</div>