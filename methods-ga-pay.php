<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require('head.php') ?>
    <title>Apple и Google Pay</title>
</head>
<body>
<div class="wrapper gapay">
    <?php require('header.php') ?>

    <!-- gapay MAIN -->
    <div class="gapay__main">
        <h2 class="title">Сверхбыстрые платежи<br>с <img src="assets/images/a-icon-pay.svg"/> и <img src="assets/images/G-icon-pay.svg"  alt="" /></h2>
        <div class="gapay__main__image">
            <img src="assets/images/gapay-main-card.png" alt="" class="card">
            <img src="assets/images/gapay-main.png" alt="" class="element">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-lg.png" alt="" class="ball-md">
        </div>
        <div class="gapay__main__desc">
            <p class="main__text">Принимайте оплату от клиентов, привыкших к своим смартфонам. Благодаря <br class="for-desk">этому типу оплат любой платеж на вашем сайте займет не более трех тапов по <br class="for-desk">экрану гаджета.</p>
        </div>
    </div>

    <!-- gapay OPPORTUNITIES -->
    <div class="gapay__opportunities">
        <h2 class="title">Как это<br>работает?</h2>
        <ul class="table">
            <li>1
                <div class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/gapay-icon1.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <p class="main__text">После клика на кнопку <br class="for-desk">Оплатить, клиент выбирает <br class="for-desk">оплату с помощью Apple Pay или <br class="for-desk">Google Pay в зависимости <br class="for-desk">от производителя своего <br class="for-desk">гаджета.</p>
                    </div>
                </div>
            </li>
            <li>2
                <div class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/gapay-icon2.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <p class="main__text">Платежные данные <br class="for-desk">автоматически подтягиваются <br class="for-desk">из электронного кошелька <br class="for-desk">пользователя. </p>
                    </div>
                </div>
            </li>
            <li>3
                <div class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/gapay-icon3.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <p class="main__text">Тап для подтверждения <br class="for-desk">транзакции в смартфоне и <br class="for-desk">оплата завершена.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
    <!-- SECTION advantages  -->
    <div class="gapay__advantages">
        <div class="gapay__advantages__left">
            <div class="gapay__advantages__item svg__item">
                <img src="assets/images/gapay-advantages-icon1.svg" alt="" class="svg__item__icon">
                <h3>Быстрее <br class="for-desk"><span>карты</span></h3>
                <p>По статистике, оплаты с помощью<br>электронных кошельков в три раза быстрее<br>традиционных.</p>
            </div>
            <div class="gapay__advantages__item svg__item">
                <img src="assets/images/gapay-advantages-icon2.svg" alt="" class="svg__item__icon">
                <h3>Это <br class="for-desk"><span>удобно</span></h3>
                <p>Все что необходимо пользователю –<br>несколько тапов. Без ввода данных,<br>паролей и прочего.</p>
            </div>
            <div class="gapay__advantages__item svg__item">
                <img src="assets/images/gapay-advantages-icon3.svg" alt="" class="svg__item__icon">
                <h3>Двойная <br class="for-desk"><span>защита</span></h3>
                <p>Дополнительно к системе защиты<br>Betterbro, эти методы оплаты<br>защищены Apple и Google.</p>
            </div>
            <div class="gapay__advantages__item svg__item">
                <img src="assets/images/gapay-advantages-icon4.svg" alt="" class="svg__item__icon">
                <h3>Выбор <br class="for-desk"><span>клиента</span></h3>
                <p>Быстрые оплаты повышают<br>лояльность ваших пользователей и<br>привлекают аудиторию, привыкшую<br>к комфорту.</p>
            </div>
        </div>
        <div class="gapay__advantages__right">
            <h2 class="title">Преимущества<br>с Apple Pay и<br>Google Pay</h2>
        </div>
    </div>

    <!-- gapay call -->
    <div class="gapay__call">
        <h2 class="title">Настройте быстрое<br> получение оплат с <span>Betterbro</span></h2>

        <div class="gapay__call__image">
            <img src="assets/images/gapay-call-card.png" alt="" class="card">
            <img src="assets/images/gapay-call.png" alt="" class="element">
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