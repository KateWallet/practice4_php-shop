<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\MenuWidget;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<section class="body">

    <header>
        <div class="container">
            <div class="header">
                <a href="/">На главную</a>
                <a href="#">Вход в админку</a>
                <a href="#" onclick="openCart(event)">Корзина</a>
                <form action="<?= Url::to(['category/search']) ?>" method="get">
                    <input type="text" style="padding: 5px" placeholder="Поиск..." name="search">
                </form>
            </div>
        </div>
    </header>

<div class="container">
<?= $content ?>
</div>

    <footer>
        <div class="container">
            <div class="footer">
                &copy; Все права защищены или типа того
            </div>
        </div>
    </footer>
</section>

<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large modal</button>-->

<div id="cart" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content" style="padding: 15px">
            ...
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
