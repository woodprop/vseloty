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
//            'filterModel' => $searchModel,
            'columns' => [
                //['class' => 'yii\grid\SerialColumn'],

                //'id',
                //'message_number',
                [
                    'attribute' => 'message_number',
                    'value' => function($data){
                        $link = str_replace('http:', 'http://', $data->message->link);
                        return Html::a($data->message_number, $link, ['target' => '_blank']);
                    },
                    'format' => 'raw',
                    ],
                'description:raw',
                //'address:ntext',
                //'type',
                'start_price',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>


    </div>
</div>
