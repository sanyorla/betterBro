<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require('head.php') ?>
    <title>Услуги</title>
</head>
<body>
<div class="wrapper services">
    <?php require('header.php') ?>

    <!-- SERVICES MAIN -->
    <div class="services__main">
        <h2 class="title">Все для увеличения<br>конверсии</h2>
        <div class="services__main__image">
            <img src="assets/images/services-main-card.png" alt="" class="card">
            <img src="assets/images/services-main.png" alt="" class="element">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-lg.png" alt="" class="ball-md">
        </div>
        <div class="services__main__desc">
            <p class="main__text">Инновационные платежные технологии, масштабируемые решения и специализация<br class="for-desk">на высокорисковых бизнесах. Betterbro знает, что точно будет работать для вас.</p>
        </div>
    </div>

    <!-- SERVICES OPPORTUNITIES -->
    <div class="services__opportunities">
        <h2 class="title">Используйте все возможности<br>платежного провайдера</h2>
        <ul class="table">
            <li>1
                <a href="services-token.php" class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/opportunities-icon1.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Токенизация <span> карт</span></h3>
                        <p class="main__text">Забудьте о хранении или<br class="for-desk">передаче конфиденциальных<br class="for-desk">данных. Betterbro создает<br class="for-desk">уникальные идентификаторы для<br class="for-desk">ваших клиентов. С ними платежи<br class="for-desk">становятся удобнее и безопаснее.</p>
                    </div>
                </a>
            </li>
            <li>2
                <a href="services-antifrod.php" class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/opportunities-icon2.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Встроенные <span> антифрод</span></h3>
                        <p class="main__text">Благодаря собственной<br class="for-desk">системе безопасности Betterbro<br class="for-desk">минимизирует риск потери ваших<br class="for-desk">средств от мошеннических схем.<br class="for-desk">Каждая транзакция будет<br class="for-desk">проверена и защищена.</p>
                    </div>
                </a>
            </li>
            <li>3
                <a href="services-personal.php" class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/opportunities-icon3.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Кастомизация <span> оплат</span></h3>
                        <p class="main__text">Платежи должны быть<br class="for-desk">упорядочены. C Betterbro вы<br class="for-desk">можете настраивать как сам<br class="for-desk">процесс приема оплат, так и то,<br class="for-desk">как будут выглядеть ваши<br class="for-desk">платежные страницы.</p>
                    </div>
                </a>
            </li>
            <li>4
                <a href="services-personal.php" class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <img src="assets/images/opportunities-icon4.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Единая платформа <br class="for-mob"> <span> для всех операций</span></h3>
                        <p class="main__text">Отчетность по вашим операциям<br class="for-desk">должна быть максимально<br class="for-desk">прозрачной. Мы помогаем<br class="for-desk">следить за всеми важными<br class="for-desk">показателями, чтобы вы<br class="for-desk">оставались в курсе о ваших<br class="for-desk">денежных операциях.</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <!-- SERVICES call -->
    <div class="services__call">
        <h2 class="title">Переходите на новый уровень<br>платежного сервиса</h2>
        <div class="services__call__image">
            <img src="assets/images/services-call-card.png" alt="" class="card">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-lg.png" alt="" class="ball-md">
        </div>
        <div class="services__call__payments">
            <img src="assets/images/g-pay.svg" alt="" class="g-pay">
            <img src="assets/images/a-pay.svg" alt="" class="a-pay">
            <img src="assets/images/visa.svg" alt="" class="visa">
            <img src="assets/images/mastercard.svg" alt="" class="mastercard">
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