<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 03.04.2017
 * Time: 21:01
 */

?>
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
