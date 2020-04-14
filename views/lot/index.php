<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LotSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Лоты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="lot-index">

        <h1><?= Html::encode($this->title) ?></h1>

        <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'options' => ['class' => 'card mt-5'],
            'summaryOptions' => ['class' => 'card-header'],
            'tableOptions' => ['class' => 'table table-hover'],
//            'filterModel' => $searchModel,
            'columns' => [
                [
                    'attribute' => 'message_number',
                    'value' => function($data){
                        $link = str_replace('http:', 'http://', $data->messages->link);
                        return Html::a($data->message_number, $link, ['target' => '_blank']);
                    },
                    'format' => 'raw',
                    ],
                'description:raw',
                //'address:ntext',
                //'type',
                [
                    'attribute' => 'start_price',
                    'value' => function($data){
                        return number_format($data->start_price, 0, '.', '&nbsp;') . '&nbsp;&#8381;';
                    },
                    'format' => 'raw',
                ],
                'messages.date_start:dateTime',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>


    </div>
</div>
