<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require('head.php') ?>
    <title>Методы</title>
</head>
<body>
<div class="wrapper methods">
    <?php require('header.php') ?>

    <!-- methods MAIN -->
    <div class="methods__main">
        <h2 class="title">Расширьте каналы<br>оплат</h2>

        <div class="methods__main__image">
            <img src="assets/images/methods-main-card.png" alt="" class="card">
            <img src="assets/images/methods-main.png" alt="" class="element">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-lg.png" alt="" class="ball-md">
        </div>


        <div class="methods__main__desc">
            <p class="main__text">Благодаря поддержке десятков способов оплаты, Betterbro позволяет легко <br class="for-desk">выходить на новые аудитории со специфическими платежными привычками. <br class="for-desk">Такой подход повышает конверсию и упрощает выход на новые рынки.</p>
        </div>
    </div>

    <!-- methods OPPORTUNITIES -->
    <div class="methods__opportunities">
        <h2 class="title">Основные методы<br>для ваших клиентов</h2>
        <ul class="table">
            <li>1
                <a href="methods-payments.php" class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/methods-icon1.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Традиционные <span>карточные платежи</span></h3>
                        <p class="main__text">Настройте удобную оплату прямо <br class="for-desk">на вашем сайте или в приложении. <br class="for-desk">Вы сможете принимать оплаты с <br class="for-desk">помощью Visa, Mastercard или <br class="for-desk">локальными методами.</p>
                    </div>
                </a>
            </li>
            <li>2
                <a href="methods-ga-pay.php" class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/methods-icon2.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Apple Pay <span>и Google Pay</span></h3>
                        <p class="main__text">Современные ультра-быстрые <br class="for-desk">платежные методы позволяют <br class="for-desk">оплачивать ваши услуги в <br class="for-desk">несколько кликов. Это ощутимый <br class="for-desk">рост конверсии!</p>
                    </div>
                </a>
            </li>
            <li>3
                <a href="methods-crypto.php" class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/methods-icon3.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Binance <span>Pay</span></h3>
                        <p class="main__text">Бесконтактные и безопасные <br class="for-desk">международные платежи в <br class="for-desk">криптовалюте для самых <br class="for-desk">современных пользователей.</p>
                    </div>
                </a>
            </li>
            <li>4
                <a href="methods-cardpay.php" class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/methods-icon4.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Выплаты <span>на карты</span></h3>
                        <p class="main__text">Главное для клиента – <br class="for-desk">безопасный и быстрый вывод его <br class="for-desk">выигрыша прямо на <br class="for-desk">персональную карту.</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <!-- methods call -->
    <div class="methods__call">
        <h2 class="title">Попробуйте новый<br>метод оплаты с <span>Betterbro</span></h2>
        <div class="methods__call__image">
            <img src="assets/images/methods-call-card.png" alt="" class="card">
            <img src="assets/images/methods-call.png" alt="" class="element">
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