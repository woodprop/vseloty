<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LotSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Лоты';
$this->params['breadcrumbs'][] = $this->title;

$lots = $dataProvider->getModels();

?>


<div class="container">
    <div class="lot-index">

        <h1><?= Html::encode($this->title) ?></h1>

        <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

        <?php foreach ($lots as $lot):
            $cardHeaderBg = 'bg-dark';
            $messageLink = str_replace('http:', 'http://', $lot->messages->link);
            $price = number_format($lot->start_price, 0, '.', '&nbsp;') . '&nbsp;&#8381;';
            $priceNode = "<span><b>$price</b></span>";
            if ($lot->messages->auction_type == "Публичное предложение") {
                $cardHeaderBg = 'bg-success';
                $priceNode = "<span class='text-success'><b>$price</b></span>";
            }
            if ($lot->messages->auction_type == "Открытый аукцион") {
                $cardHeaderBg = 'bg-danger';
                $priceNode = "<span class='text-danger'><b>$price</b></span>";
            }
            ?>

        <div class="card mt-5">
            <div class="card-header <?= $cardHeaderBg ?> text-white d-flex justify-content-between">
                <b>№ сообщения: <?= Html::a($lot->message_number, $messageLink, ['target' => '_blank', 'class' => 'text-white']) ?></b>
                <span><?= $lot->messages->auction_type ?></span>
                <span class="">Дата публикации: <?= date_format(date_create($lot->messages->date_pub), 'd-m-Y') ?></span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <?= $lot->description ?>
                    </div>
                    <div class="col-md-3">
                        <h6>Начальная цена:</h6>
                        <?= $priceNode ?>
                    </div>
                </div>
                <hr>
                <h5 class="text-right">Начало подачи заявок: <?= $lot->messages->date_start ?></h5>
                <div class="row">
                    <div class="col">
                        <a href="" class="btn btn-info">Объявление о торгах</a>
                    </div>
                    <div class="col">
                        <a href="" class="btn btn-secondary disabled">Площадка торгов</a>
                    </div>
                    <div class="col">
                        <a href="" class="btn btn-danger">Карточка должника</a>
                    </div>
                    <div class="col">
                        <a href="" class="btn btn-warning">Все лоты должника</a>
                    </div>

                </div>
            </div>
        </div>


        <?php endforeach; ?>


    </div>
</div>
