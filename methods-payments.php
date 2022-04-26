<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require('head.php') ?>
    <title>Оплаты на сайте</title>
</head>
<body>
<div class="wrapper payments">
    <?php require('header.php') ?>

    <!-- payments MAIN -->
    <div class="payments__main">
        <h2 class="title">Прием платежей<br>на вашем сайте</h2>

        <div class="payments__main__image">
            <img src="assets/images/payments-main-card.png" alt="" class="card">
            <img src="assets/images/payments-main.png" alt="" class="element">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-lg.png" alt="" class="ball-md">
        </div>

        <div class="payments__main__desc">
            <p class="main__text">Решения от Betterbro позволяют обрабатывать платежи любым удобным для <br class="for-desk">вашего бизнеса способом. Мы специально упростили процесс приема оплат, <br class="for-desk">чтобы вы могли сфокусироваться на ваших задачах.  </p>
        </div>
    </div>

    <!-- payments OPPORTUNITIES -->
    <div class="payments__opportunities">
        <h2 class="title">Как это<br>работает?</h2>
        <ul class="table">
            <li>1
                <div class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/payments-icon1.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <p class="main__text">При оплате на вашем сайте <br class="for-desk">клиент переходит <br class="for-desk">на защищенную внешнюю <br class="for-desk">или внутреннюю страницу <br class="for-desk">оплаты.</p>
                    </div>
                </div>
            </li>
            <li>2
                <div class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/payments-icon2.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <p class="main__text">Выбирает метод оплаты <br class="for-desk">и вводит свои платежные <br class="for-desk">данные.</p>
                    </div>
                </div>
            </li>
            <li>3
                <div class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/payments-icon3.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <p class="main__text">Клик на кнопку “Оплатить” и <br class="for-desk">деньги через несколько <br class="for-desk">секунд окажуться на вашем <br class="for-desk">счете. </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
    <!-- SECTION advantages  -->
    <div class="payments__advantages">
        <div class="payments__advantages__left">
            <div class="payments__advantages__item svg__item">
                <img src="assets/images/payments-advantages-icon1.svg" alt="" class="svg__item__icon">
                <h3>Оплаты <br class="for-desk"><span>в 1 клик</span></h3>
                <p>Система автоматически запоминает<br>платежные данные пользователей так, чтобы<br>им не пришлось вводить их повторно.</p>
            </div>
            <div class="payments__advantages__item svg__item">
                <img src="assets/images/payments-advantages-icon2.svg" alt="" class="svg__item__icon">
                <h3><span>Безопасность</span><br>&nbsp;</h3>
                <p>Все транзакции защищены<br>внутренней антифрод системой<br>Betterbro.</p>
            </div>
            <div class="payments__advantages__item svg__item">
                <img src="assets/images/payments-advantages-icon3.svg" alt="" class="svg__item__icon">
                <h3>Легкая <br class="for-desk"><span>интеграция</span></h3>
                <p>Вы можете использовать готовые<br>решения или разработать свою<br>платежную инфраструктуру вместе<br>с нами с нуля.</p>
            </div>
            <div class="payments__advantages__item svg__item">
                <img src="assets/images/payments-advantages-icon4.svg" alt="" class="svg__item__icon">
                <h3>Полная <br class="for-desk"><span>кастомизация</span></h3>
                <p>Настраивайте сценарии как, где и<br>когда будет происходить оплата,<br>чтобы контролировать работу с<br>вашими клиентами.</p>
            </div>
        </div>
        <div class="payments__advantages__right">
            <h2 class="title">Преимущества <br > работы <br class="for-desk">с <span>Betterbro</span></h2>
        </div>
    </div>

    <!-- payments call -->
    <div class="payments__call">
        <h2 class="title">Получайте больше оплат<br>от ваших клиентов</h2>

        <div class="payments__call__image">
            <img src="assets/images/payments-call-card.png" alt="" class="card">
            <img src="assets/images/payments-call.png" alt="" class="element">
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