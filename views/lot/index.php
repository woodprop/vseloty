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
            'tableOptions' => ['class' => 'table table-responsive table-borderless'],
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
                        $price = number_format($data->start_price, 0, '.', '&nbsp;') . '&nbsp;&#8381;';
                        if ($data->messages->auction_type == "Публичное предложение") {
                            return "<span class='text-success'><b>$price</b></span>";
                        }elseif ($data->messages->auction_type == "Открытый аукцион"){
                            return "<span class='text-danger'><b>$price</b></span>";
                        }
                        return $price;
                    },
                    'format' => 'raw',
                ],
                'messages.date_start:dateTime',
                'messages.date_pub:date',

                ['class' => 'yii\grid\ActionColumn'],
            ],
            'beforeRow' => function($data){
                $class = 'bg-dark';
                if ($data->messages->auction_type == "Публичное предложение") $class = 'bg-success';
                if ($data->messages->auction_type == "Открытый аукцион") $class = 'bg-danger';
                return "<tr class='{$class}'>
                            <td colspan='6'>
                                <h5 class='text-center text-white'>{$data->messages->auction_type}</h5>
                            </td>
                        </tr>";
            },
            'afterRow' => function($data){
                return "<tr>
                            <td></td>
                            <td colspan='5'>
                                <a href='' class='btn btn-danger'>Карточка должника</a>
                                <a href='' class='btn btn-secondary'>Площадка торгов</a>
                                <a href='' class='btn btn-warning'>Все лоты должника</a>
                            </td>
                        </tr>";
            },
        ]); ?>


    </div>
</div>
