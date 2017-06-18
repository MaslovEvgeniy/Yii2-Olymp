<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\assets\MDLAsset::register($this);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="mdl-layout__container">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Фк Олимп Змиев</span>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout__title"><a href="/"><img src="/img/team-logo.png" alt="Team-logo" class="team-logo"></a></span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="/news"><i class="material-icons">library_books</i></i>Новости</a>
                <a class="mdl-navigation__link" href="/tournaments"><i class="material-icons">games</i>Турниры</a>
                <a class="mdl-navigation__link" href="/matches"><i class="material-icons">event_note</i>Матчи</a>
                <a class="mdl-navigation__link" href="/team"><i class="material-icons">account_circle</i>Команда</a>
                <a class="mdl-navigation__link" href="/gallery"><i class="material-icons">wallpaper</i>Галерея</a>
                <a class="mdl-navigation__link" href="/contact"><i class="material-icons">perm_phone_msg</i>Контакты</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <?= $content ?>
        </main>
        <footer class="mdl-mini-footer">
            <div class="mdl-mini-footer__left-section">
                <div class="mdl-logo">ФК Олимп Змиев</div>
            </div>
            <div class="mdl-mini-footer__right-section">
                <a class="follow" href="https://vk.com/public39207610"><i class="fa fa-vk"></i>Follow us</a>
            </div>
        </footer>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
