<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require('head.php') ?>
    <title>BinancePay</title>
</head>
<body>
<div class="wrapper crypto">
    <?php require('header.php') ?>

    <!-- crypto MAIN -->
    <div class="crypto__main">
        <h2 class="title">Прием платежей<br>в криптовалюте</h2>

        <div class="crypto__main__image">
            <img src="assets/images/crypto-main-card.png" alt="" class="card">
            <img src="assets/images/crypto-main.png" alt="" class="element">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-lg.png" alt="" class="ball-md">
        </div>

        <div class="crypto__main__desc">
            <p class="main__text">Позвольте клиентам оплачивать ваши услуги более 40 криптовалютами <br class="for-desk">благодаря поддержке Binance Pay от <span>Betterbro</span></p>
        </div>
    </div>

    <!-- crypto OPPORTUNITIES -->
    <div class="crypto__opportunities">
        <h2 class="title">Как это<br>работает?</h2>
        <ul class="table">
            <li>
                <div class="table__block background__vertical">
                    <span class="dote"></span>
                    <img src="assets/images/crypto-icon.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <p class="main__text">Binance Pay – это платежный метод от крупнейшей криптовалютной биржи мира Binance. Имея аккаунт на <br class="for-desk">бирже и мультивалютный крипто-кошелек, пользователи Binance могут оплачивать товары и услуги просто <br class="for-desk">выбрав Binance Pay в качестве метода оплаты, как это проихсодит с Apple Pay или Google Pay.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
    <!-- SECTION advantages  -->
    <div class="crypto__advantages">
        <div class="crypto__advantages__left">
            <div class="crypto__advantages__item svg__item">
                <img src="assets/images/crypto-advantages-icon1.svg" alt="" class="svg__item__icon">
                <h3><span>Скорость</span></h3>
                <p>Транзакции с Binance Pay практически<br>мгновенны и не требуют у пользователя<br>заполнения платежных данных.</p>
            </div>
            <div class="crypto__advantages__item svg__item">
                <img src="assets/images/crypto-advantages-icon2.svg" alt="" class="svg__item__icon">
                <h3><span>Современность</span></h3>
                <p>Поклонники криптовалюты –<br>отдельная аудитория, которая может<br> стать постоянными клиентами вашего<br>бизнеса.</p>
            </div>
            <div class="crypto__advantages__item svg__item">
                <img src="assets/images/crypto-advantages-icon3.svg" alt="" class="svg__item__icon">
                <h3><span>Разнообразие</span></h3>
                <p>От Bitcoin до Lisk. Ваши клиенты смогут<br>выбрать для оплаты одну из более 40<br>представленных криптовалют</p>
            </div>
            <div class="crypto__advantages__item svg__item">
                <img src="assets/images/crypto-advantages-icon4.svg" alt="" class="svg__item__icon">
                <h3>Никаких <br class="for-desk"><span>границ</span></h3>
                <p>Платежи в криптовалюте доступны<br>любому человеку в любой точке мира.<br>По единой комиссии.</p>
            </div>
        </div>
        <div class="crypto__advantages__right">
            <h2 class="title">Преимущества<br>приема оплат<br>в криптовалюте</h2>
        </div>
    </div>

    <!-- crypto call -->
    <div class="crypto__call">
        <h2 class="title">Начните принимать оплату <br class="for-desk">в криптовалюте за ваши услуги</h2>

        <div class="crypto__call__image">
            <img src="assets/images/crypto-call-card.png" alt="" class="card">
            <img src="assets/images/crypto-call.png" alt="" class="element">
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