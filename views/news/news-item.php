<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
?>
<div class="mdl-grid">
    <article class="team-article mdl-card mdl-cell mdl-cell--12-col mdl-shadow--3dp">
        <img class="team-article__image" src="/img/news/<?= $article->image; ?>">
        <div class="team-article__head">
            <h6 class="team-article__category"><?= $article->category->name; ?></h6>
            <h6 class="team-article__date"><i class="material-icons">alarm</i><?= $article->Date; ?></h6>
        </div>
        <div class="team-article__content">
            <h4 class="team-article__title"><?= $article->title ?></h4>
            <p class="team-article__text"><?= $article->text ?></p>
        </div>
        <div class="team-article__bottom">
            <i class="material-icons">person_pin</i><h6><?= $article->author->name ?></h6>
            <div class="team-article__social">
                <i class="fa fa-eye" aria-hidden="true"></i><h6><?= $article->views; ?></h6>
            </div>
        </div>
    </article>
    <div class="comments mdl-card mdl-cell mdl-cell--12-col mdl-shadow--3dp">
        <div class="comments__list" id="comments">
            <h4 class="comments__title">Комментарии (<span id="comments__count"><?= count($comments); ?></span>)</h4>
            <?php if (!empty($comments)) : ?>
                <?php foreach ($comments as $comment) : ?>
                    <div class="comments__box">
                        <hr>
                        <img class="comments__image" src="/img/admin.jpg">
                        <div class="comments__info">
                            <h6 class="comments__author"><?= $comment->author ?></h6>
                            <p class="comments__date"><i class="material-icons">alarm</i><?= $comment->Date ?></p>
                            <p class="comments__text"><?= $comment->text ?></p>
                        </div>
                        <hr>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <h6 id="noComments">Комментариев пока нет</h6>
            <?php endif; ?>
        </div>
        <div class="comments__form">
            <h4 class="comments__title">Оставить комментарий</h4>
            <?php $commentAdd = ActiveForm::begin([
                    'id' => 'commentForm',
                    'action' => 'comment',
                    'enableClientValidation' => true,
                ]
            ) ?>
            <div class="form-card__inputs">
                <?= $commentAdd->field($commentForm, 'author', [
                    'labelOptions' => ['class' => 'mdl-textfield__label'],
                    'inputOptions' => ['class' => 'mdl-textfield__input'],
                    'template' => '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--6-col">{label}{input}{hint}</div>{error}'
                ]); ?>
                <?= $commentAdd->field($commentForm, 'text', [
                    'labelOptions' => ['class' => 'mdl-textfield__label'],
                    'inputOptions' => ['class' => 'mdl-textfield__input'],
                    'template' => '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col">{label}{input}{hint}</div>{error}'
                ])->textarea(['rows' => 4]); ?>
                <?= $commentAdd->field($commentForm, 'article')->hiddenInput(['value'=> $article->id])->label(false); ?>
            </div>
            <div class="form-card__actions">
                <hr>
                <?= Html::submitButton('Отправить', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--grey-900']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


