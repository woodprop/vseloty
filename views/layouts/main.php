<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <title><?= $this->title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <?php $this->head() ?>
    </head>

    <body>
<?php $this->beginBody() ?>

<!-- ------- header start ------- -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= Url::to(['/']) ?>">ВсеЛоты.ру</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="<?= Url::to(['lot/index']) ?>">Лоты</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Искать</button>
        </form>
    </div>
</nav>

<div class="jumbotron">
    <div class="container">
        <h1>VseLoty.ru</h1>
        <p>Все Лоты с торгов по банкротству - Недвижимость, транспорт и другое</p>
    </div>
</div>
<!-- ------- header end ------- -->

<!-- ------- content start ------- -->

<div class="container">
    <?= $content ?>
</div>

<!-- ------- content end ------- -->

<!-- ------- footer start ------- -->
<footer class="bg-dark mt-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
                <h5 class="text-white">VseLoty.ru</h5>
                <small class="d-block mb-3 text-muted">© 2020</small>
            </div>
            <div class="col-6 col-md d-none d-sm-block">
                <h5 class="text-white">Услуги</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Услуга 1</a></li>
                    <li><a class="text-muted" href="#">Услуга 2</a></li>
                    <li><a class="text-muted" href="#">Услуга 3</a></li>
                </ul>
            </div>
            <div class="col-6 col-md d-none d-sm-block">
                <h5 class="text-white">Ресурсы</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Блог</a></li>
                    <li><a class="text-muted" href="#">Статьи</a></li>
                    <li><a class="text-muted" href="#">Книги</a></li>
                    <li><a class="text-muted" href="#">Ссылки</a></li>
                </ul>
            </div>
            <div class="col-6 col-md d-none d-sm-block">
                <h5 class="text-white">О нас</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">О сайте</a></li>
                    <li><a class="text-muted" href="#">История</a></li>
                    <li><a class="text-muted" href="#">Команда</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
    </body>

</html>
<?php $this->endPage() ?>
