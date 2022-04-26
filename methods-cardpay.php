<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require('head.php') ?>
    <title>Выплаты</title>
</head>
<body>
<div class="wrapper cardpay">
    <?php require('header.php') ?>

    <!-- cardpay MAIN -->
    <div class="cardpay__main">
        <h2 class="title">Выплачивайте выигрыши <br class="for-desk">прямо на карту клиента</h2>

        <div class="cardpay__main__image">
            <img src="assets/images/cardpay-main-card.png" alt="" class="card">
            <img src="assets/images/cardpay-main.png" alt="" class="element">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-lg.png" alt="" class="ball-md">
        </div>


        <div class="cardpay__main__desc">
            <p class="main__text">Совершайте разовые или постоянные выплаты вашим клиентам за минуты, а не часы.</p>
        </div>
    </div>

    <!-- cardpay OPPORTUNITIES -->
    <div class="cardpay__opportunities">
        <h2 class="title">Как это<br>работает?</h2>
        <ul class="table">
            <li>
                <div class="table__block background__vertical">
                    <span class="dote"></span>
                    <img src="assets/images/cardpay-icon.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <p class="main__text">Процесс с Betterbro может быть частично или полностью автоматизирован. В первом случае вы сами <br class="for-desk">указываете кому и сколько перевести средств, а система все делает за вас. При полной автоматизации, <br class="for-desk">клиент оставляет заявку на вывод средств и система выполняет её</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
    <!-- SECTION advantages  -->
    <div class="cardpay__advantages">
        <div class="cardpay__advantages__left">
            <div class="cardpay__advantages__item svg__item">
                <img src="assets/images/cardpay-advantages-icon1.svg" alt="" class="svg__item__icon">
                <h3>Массовые<br><span>выплаты</span></h3>
                <p>Вы можете формировать списки пользователей для выплат так, как вам удобно. Без ограничения числа получателей.</p>
            </div>
            <div class="cardpay__advantages__item svg__item">
                <img src="assets/images/cardpay-advantages-icon2.svg" alt="" class="svg__item__icon">
                <h3>Подробная<br><span>аналитика</span></h3>
                <p><span>Betterbro</span> собирает детальную статистику по движению средств и ключевым бизнес-индикаторам прямо в вашем личном кабинете. Вы сможете найти и проанализировать любую операцию.</p>
            </div>
            <div class="cardpay__advantages__item svg__item">
                <img src="assets/images/cardpay-advantages-icon3.svg" alt="" class="svg__item__icon">
                <h3>Хранение<br><span>данных</span></h3>
                <p>Вся чувствительная пользовательская информация хранится на стороне Betterbro так что вам не надо думать о защите данных ваших клиентов.</p>
            </div>
            <div class="cardpay__advantages__item svg__item">
                <img src="assets/images/cardpay-advantages-icon4.svg" alt="" class="svg__item__icon">
                <h3>Быстрое<br><span>зачисление</span></h3>
                <p>Как только <span>Betterbro</span> получает заявку на выплату, деньги на счет клиента отправляются и главное доходят практически мгновенно</p>
            </div>
        </div>
        <div class="cardpay__advantages__right">
            <h2 class="title">Преимущества <br>работы <br class="for-desk">с <span>Betterbro</span></h2>
        </div>
    </div>

    <!-- cardpay call -->
    <div class="cardpay__call">
        <h2 class="title">Выплачивать выигрыши<br> можно удобно. Попробуйте! </h2>

        <div class="cardpay__call__image">
            <img src="assets/images/cardpay-call-card.png" alt="" class="card">
            <img src="assets/images/cardpay-call.png" alt="" class="element">
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