<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;
use yii\widgets\Pjax;

$this->title = 'Новости / ФК Олимп Змиев';
?>
<section class="news">
    <div class="mdl-grid">
        <?php if (!empty($articles)): ?>
            <?php foreach ($articles as $article): ?>
                <div class="mdl-cell mdl-cell--4-col md-cell--6-col-tablet md-cell--12-col-phone">
                    <div class="news-card mdl-card mdl-shadow--3dp">
                        <div class="news-card__image border-tlr-radius">
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
                                <h4><a href="/news/<?= $article->id ?>"><?= $article->title; ?></a></h4>
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
                <?=  LinkPager::widget([
                    'pagination' => $pages,
                    'nextPageLabel' => '<i class="fa fa-chevron-right"></i>',
                    'prevPageLabel' => '<i class="fa fa-chevron-left"></i>'
                ]); ?>
            </div>
        <?php else : ?>
            <h6>Новостей пока нет</h6>
        <?php endif; ?>
    </div>
</section>
