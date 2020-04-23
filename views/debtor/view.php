<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Лоты должника';
$this->params['breadcrumbs'][] = $this->title;
$lot = [];

foreach ($model->messages as $message){
    foreach ($message->lots as $lot){
        $lots[] = $lot;
    }
}
?>


<div class="lot-index">

    <h3 class="my-3">Все лоты должника с <b>ИНН <?= $model->id ?></b></h3>

    <?php foreach ($lots as $lot):
        $cardHeaderBg = 'bg-dark';
        $messageLink = str_replace('http:', 'http://', $lot->messages->link);
        $debtorLink = isset($lot->messages->debtor) ? $lot->messages->debtor->link : null;
        $price = number_format($lot->start_price, 0, '.', '&nbsp;') . '&nbsp;&#8381;';
        $priceNode = "<span><b>$price</b></span>";
        if ($lot->messages->auction_type == "Публичное предложение") {
            $cardHeaderBg = 'bg-danger';
            $priceNode = "<span class='text-danger'><b>$price</b></span>";
        }
        if ($lot->messages->auction_type == "Открытый аукцион") {
            $cardHeaderBg = 'bg-success';
            $priceNode = "<span class='text-success'><b>$price</b></span>";
        }
        ?>

        <div class="card mb-5">
            <div class="card-header <?= $cardHeaderBg ?> text-white">
                <div class="row">
                    <div class="col-sm-12 col-md">
                        <b>№ сообщения: <?= Html::a($lot->message_number, $messageLink, ['target' => '_blank', 'class' => 'text-white']) ?></b>

                    </div>
                    <div class="col-sm-12 col-md text-center">
                        <span><?= $lot->messages->auction_type ?></span>

                    </div>
                    <div class="col-sm-12 col-md text-right">
                        <span>Дата публикации: <?= date_format(date_create($lot->messages->date_pub), 'd/m/Y') ?></span>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <?= $lot->description ?>
                    </div>
                    <div class="col-md-3 mt-sm-3 mt-md-0">
                        <h5>Начальная цена:</h5>
                        <?= $priceNode ?>
                    </div>
                </div>

                <div class="row">
                    <div class="mt-3 col-sm-12 col-md">
                        <a href="<?= $messageLink ?>" target="_blank" class="btn btn-block btn-info">Объявление о торгах</a>
                    </div>
                    <div class="mt-3 col-sm-12 col-md">
                        <a href="#" class="btn btn-block btn-secondary disabled">Площадка торгов</a>
                    </div>
                    <div class="mt-3 col-sm-12 col-md">
                        <a href="<?= $debtorLink ?>" target="_blank" class="btn btn-block btn-danger <?php if (!$debtorLink) echo 'disabled'; ?>">Карточка должника</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <h5 class="mt-sm-3 mt-md-0 text-right">Начало подачи заявок: <?= date_format(date_create($lot->messages->date_start), 'd/m/Y' ) ?></h5>
                    </div>
                </div>

            </div>
        </div>
    <?php endforeach; ?>


</div>
