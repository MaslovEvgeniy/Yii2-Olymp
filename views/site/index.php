<?php

/* @var $this yii\web\View */

use app\assets\OwlAsset;
use \yii\helpers\Html;

OwlAsset::register($this);
$this->title = 'ФК Олимп Змиев';
?>
<section class="closest-matches">
    <div class="mdl-grid">
        <div class="section__title mdl-cell mdl-cell--12-col">
            <h2 class="mdl-typography--headline ">Ближайшие <span>матчи</span></h2>
            <hr>
        </div>
        <!--        <div class="mdl-cell mdl-cell--12-col">-->
        <!--            <div id="matches-sl" class="closest-matches__sl owl-carousel">-->
        <!--                <div class="match match--played">-->
        <!--                    <div class="match__info">-->
        <!--                        <h6 class="match__date">17/03/2017 16:00</h6>-->
        <!--                        <h6 class="match__place">Харьков</h6>-->
        <!--                    </div>-->
        <!--                    <div class="match__body">-->
        <!--                        <div class="match__team match__team--home">-->
        <!--                            --><? //= Html::img('@web/img/team-logo.png', ['class' => 'team__logo']); ?>
        <!--                            <h5 class="team__name">Олимп Змиев</h5>-->
        <!--                        </div>-->
        <!--                        <div class="match__team match__team--away">-->
        <!--                            --><? //= Html::img('@web/img/team-logo.png', ['class' => 'team__logo']); ?>
        <!--                            <h5 class="team__name">Олимп Змиев</h5>-->
        <!--                        </div>-->
        <!--                        <div class="match__result">-->
        <!--                            <h2 class="result__score result__score--home">1</h2>-->
        <!--                            <span class="divider">:</span>-->
        <!--                            <h2 class="result__score result__score--away">1</h2>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <h4 class="match__tournament">Чемпионат мира | 5 тур</h4>-->
        <!--                </div>-->
        <!--                <div class="match match--played">-->
        <!--                    <div class="match__info">-->
        <!--                        <h4 class="match__date">17/03/2017 16:00</h4>-->
        <!--                        <h4 class="match__place">Харьков</h4>-->
        <!--                    </div>-->
        <!--                    <div class="match__body">-->
        <!--                        <div class="match__team match__team--home">-->
        <!--                            --><? //= Html::img('@web/img/team-logo.png', ['class' => 'team__logo']); ?>
        <!--                            <h5 class="team__name">Олимп Змиев</h5>-->
        <!--                        </div>-->
        <!--                        <div class="match__team match__team--away">-->
        <!--                            --><? //= Html::img('@web/img/team-logo.png', ['class' => 'team__logo']); ?>
        <!--                            <h5 class="team__name">Олимп Змиев</h5>-->
        <!--                        </div>-->
        <!--                        <div class="match__result">-->
        <!--                            <h2 class="result__score result__score--home">1</h2>-->
        <!--                            <span class="divider">:</span>-->
        <!--                            <h2 class="result__score result__score--away">1</h2>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <h4 class="match__tournament">Чемпионат мира | 5 тур</h4>-->
        <!--                </div>-->
        <!--                <div class="match">-->
        <!--                    <div class="match__info">-->
        <!--                        <h4 class="match__date">17/03/2017 16:00</h4>-->
        <!--                        <h4 class="match__place">Харьков</h4>-->
        <!--                    </div>-->
        <!--                    <div class="match__body">-->
        <!--                        <div class="match__team match__team--home">-->
        <!--                            --><? //= Html::img('@web/images/footer-logo.png', ['class' => 'team__logo']); ?>
        <!--                            <h5 class="team__name">Олимп Змиев</h5>-->
        <!--                        </div>-->
        <!--                        <div class="match__team match__team--away">-->
        <!--                            --><? //= Html::img('@web/images/footer-logo.png', ['class' => 'team__logo']); ?>
        <!--                            <h5 class="team__name">Олимп Змиев</h5>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <h4 class="match__tournament">Чемпионат мира | 5 тур</h4>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="mdl-cell mdl-cell--12-col mdl-typography--text-center">-->
        <!--            <a href="/news">-->
        <!--                <button class="mdl mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--green-400">-->
        <!--                    Больше-->
        <!--                </button>-->
        <!--            </a>-->
        <!--        </div>-->
    </div>
</section>
<section class="latest-news">
    <div class="mdl-grid">
        <div class="section__title mdl-cell mdl-cell--12-col">
            <h2 class="mdl-typography--headline ">Последние <span>новости</span></h2>
            <hr>
        </div>
        <?php if (!empty($latestArticles)): ?>
            <?php foreach ($latestArticles as $article): ?>
                <div class="mdl-cell mdl-cell--4-col md-cell--6-col-tablet md-cell--12-col-phone">
                    <div class="news-card mdl-card mdl-shadow--3dp">
                        <div class="news-card__image">
                            <img src="/img/news/<?= $article->image ?>" alt="image">
                        </div>
                        <div class="news-card__content news-card__padding">
                            <div class="news-card__share">
                                <div class="news-card__social">
                                    <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                                    <a class="share-icon vk" href="#"><span class="fa fa-vk"></span></a>
                                    <a class="share-icon googleplus" href="#"><span
                                                class="fa fa-google-plus"></span></a>
                                </div>
                                <a id="share" class="share-toggle share-icon" href="#"></a>
                            </div>
                            <div class="news-card__meta">
                                <a href="#"><?= $article->category->name; ?></a>
                                <time><?= $article->Date; ?></time>
                            </div>
                            <article class="news-card__article">
                                <h4><a href="news/<?= $article->id ?>"><?= $article->title; ?></a></h4>
                            </article>
                        </div>
                        <div class="news-card__action">
                            <div class="news-card__author">
                                <img src="/img/<?= $article->author->image ?>" alt="user">
                                <div class="news-card__author-content">
                                    <a href="#"><?= $article->author->name; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="mdl-cell mdl-cell--12-col mdl-typography--text-center">
                <a href="/news">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--green-400">
                        Больше
                    </button>
                </a>
            </div>
        <?php else : ?>
            <h6>Новостей пока нет</h6>
        <?php endif; ?>
    </div>
</section>
