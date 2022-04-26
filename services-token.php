<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require('head.php') ?>
    <title>Токенизация</title>
</head>
<body>
<div class="wrapper token">
    <?php require('header.php') ?>

    <!-- TOKEN MAIN -->
    <div class="token__main">
        <h2 class="title">Токенизация карт<br>клиентов</h2>
        <div class="token__main__image">
            <img src="assets/images/token-main-card.png" alt="" class="card">
            <img src="assets/images/token-main.png" alt="" class="element">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-lg.png" alt="" class="ball-md">
        </div>


        <div class="token__main__desc">
            <p class="main__text">Токенизация данных карты снимает надобность хранить персональную<br>информацию о клиентах и оптимизирует платежный опыт на вашем сайте.</p>
        </div>
    </div>

    <!-- TOKEN OPPORTUNITIES -->
    <div class="token__opportunities">
        <h2 class="title">Особенности<br>токенизации<br>с <span>BetterBro</span></h2>
        <ul class="table">
            <li>1
                <div class="table__block background__vertical">
                    <span class="dote__reverse"></span>
                    <img src="assets/images/token-icon1.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Оплаты <span>в один клик</span></h3>
                        <p class="main__text">Токенизированные данные<br class="for-desk">автоматически<br class="for-desk">подставляются клиенту<br class="for-desk">при следующей оплате.</p>
                    </div>
                </div>
            </li>
            <li>2
                <div class="table__block background__vertical">
                    <span class="dote__reverse"></span>
                    <img src="assets/images/token-icon2.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Продвинутое <span>шифрование</span></h3>
                        <p class="main__text">Данные клиентов хранятся<br class="for-desk">фрагментарно,<br class="for-desk">а значит их невозможно<br class="for-desk">расшифровать или украсть<br class="for-desk">сторонним лицам.</p>
                    </div>
                </div>
            </li>
            <li>3
                <div class="table__block background__vertical">
                    <span class="dote__reverse"></span>
                    <img src="assets/images/token-icon3.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Автоматическое <span>обновление</span></h3>
                        <p class="main__text">При перевыпуске или<br class="for-desk">продлении карты токен<br class="for-desk">продолжает действовать,<br class="for-desk">то есть клиенту не надо<br class="for-desk">повторно вводить данные<br class="for-desk">или CVV код.</p>
                    </div>
                </div>
            </li>
            <li>4
                <div class="table__block background__vertical">
                    <span class="dote__reverse"></span>
                    <img src="assets/images/token-icon4.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Высокая<br class="for-desk">проходимость <span>платежей</span></h3>
                        <p class="main__text">Как показывает<br class="for-desk"> практика, платежи с<br class="for-desk">токенизированных карт<br class="for-desk">реже отклоняются<br class="for-desk">банками.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <!-- TOKEN call -->
    <div class="token__call">
        <h2 class="title">Узнайте больше о токенизации<br class="for-desk">у наших специалистов или оставьте<br class="for-desk">заявку на подключение</h2>

        <div class="token__call__image">
            <img src="assets/images/token-call-card.png" alt="" class="card">
            <img src="assets/images/token-call.png" alt="" class="element">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-lg.png" alt="" class="ball-md">
        </div>
        <a href="#section__start" class="btn__main">Подключить Betterbro</a>
    </div>

    <!-- SECTION start  -->
    <?php require('sectionStart.php') ?>



    <?php require('footer.php') ?>
</div>

<?php require('scripts.php') ?>
    
</body>
</html>