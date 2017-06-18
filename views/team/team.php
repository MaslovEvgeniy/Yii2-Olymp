<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Команда / ФК Олимп Змиев';
?>
<section class="team">
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#goalkeepers-panel" class="mdl-tabs__tab is-active">Вратари</a>
            <a href="#defenders-panel" class="mdl-tabs__tab">Защитники</a>
            <a href="#midfielders-panel" class="mdl-tabs__tab">Полузащитники</a>
            <a href="#forwards-panel" class="mdl-tabs__tab">Нападающие</a>
        </div>

        <div class="mdl-tabs__panel is-active" id="goalkeepers-panel">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--2-col">
                    <div class="player__info">
                        <div class="player__image mdl-shadow--2dp">
                            <?= Html::img('@web/img/noavatar.jpg', ['class' => 'img-responsive']); ?>
                            <div class="player__number">
                                <span>7</span>
                            </div>
                        </div>
                        <h6 class="player__name">Игрок Игроков</h6>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--2-col ">
                    <div class="player__info">
                        <div class="player__image mdl-shadow--2dp">
                            <?= Html::img('@web/img/noavatar.jpg', ['class' => 'img-responsive']); ?>
                            <div class="player__number">
                                <span>7</span>
                            </div>
                        </div>
                        <h6 class="player__name">Игрок Игроков</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdl-tabs__panel" id="defenders-panel">
            <ul>
                <li>Tywin</li>
                <li>Cersei</li>
                <li>Jamie</li>
                <li>Tyrion</li>
            </ul>
        </div>
        <div class="mdl-tabs__panel" id="midfielders-panel">
            <ul>
                <li>Viserys</li>
                <li>Daenerys</li>
            </ul>
        </div>
        <div class="mdl-tabs__panel" id="forwards-panel">
            <ul>
                <li>Viserys</li>
                <li>Daenerys</li>
            </ul>
        </div>
    </div>
</section>
