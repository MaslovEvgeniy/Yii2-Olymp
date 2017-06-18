<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 27.03.2017
 * Time: 21:08
 */
?>
<section class="contact">
    <div class="mdl-grid">
        <div class="mdl-card contact__form mdl-cell mdl-cell--6-col mdl-shadow--2dp">
            <div class="form-card">
                <div class="form-card__title mdl-shadow--2dp">
                    <i class="material-icons">message</i>
                    <h4 class="mdl-card__title-text">Связаться с нами</h4>
                </div>
                <div class="form-card__inputs">
                    <form action="">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--6-col">
                            <label class="mdl-textfield__label" for="senderName">Имя</label>
                            <input class="mdl-textfield__input" type="text" id="senderName">
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--1-offset mdl-cell--5-col">
                            <label class="mdl-textfield__label" for="senderMail">E-mail</label>
                            <input class="mdl-textfield__input" type="email" id="senderMail">
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--12-col">
                            <textarea class="mdl-textfield__input" type="text" rows= "4" id="senderText" ></textarea>
                            <label class="mdl-textfield__label" for="senderText">Текст сообщения</label>
                        </div>
                    </form>
                </div>
                <div class="form-card__actions">
                    <hr>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--grey-900">
                        Отправить
                    </button>
                </div>
            </div>
        </div>
        <div class="mdl-card contact__admin-card mdl-cell mdl-cell--6-col mdl-shadow--2dp">
            <div class="admin-card">
                <img src="img/admin.jpg" alt="" class="admin-card__image">
                <div class="admin-card__text">
                    <h5>Черепаха Игорь</h5>
                    <h6>Администратор команды</h6>
                </div>
                <div class="admin-card__contacts">
                    <div class="admin-card__contacts-phone">
                        <i class="material-icons">contact_phone</i>
                        <p>+380999999999</p>
                    </div>
                    <div class="admin-card__contacts-mail">
                        <i class="material-icons">contact_mail</i>
                        <p>mail@mail.com</p>
                    </div>
                </div>
                <div class="admin-card__social">
                    <a class="social-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                    <a class="social-icon vk" href="#"><span class="fa fa-vk"></span></a>
                    <a class="social-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>
                </div>
            </div>
        </div>
        <div class="mdl-card contact__map mdl-cell mdl-cell--12-col mdl-shadow--2dp">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5160.633479299687!2d36.368147110697834!3d49.704838426425454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1490990851187" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>
