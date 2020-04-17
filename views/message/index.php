<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="message-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Message', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //'message_number',
            [
                'attribute' => 'message_number',
                'value' => function($data){
                    return Html::a($data->message_number, ['message/view', 'message_number' => $data->message_number]);
                },
                'format' => 'html',
            ],
            'date_pub',
            'inn',
            //'description:ntext',
            'auction_type',
            //'date_start',
            //'place',
            //'link',
            [
                'attribute' => 'lots',
                'label' => 'Лотов',
                'value' => function($data){
                    return count($data->lots);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
</div>