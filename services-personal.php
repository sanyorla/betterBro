<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require('head.php') ?>
    <title>Кастомизация</title>
</head>
<body>
<div class="wrapper personal">
    <?php require('header.php') ?>

    <!-- PERSONAL MAIN -->
    <div class="personal__main">
        <h2 class="title">Вся нужная информация<br class="for-desk">в едином кабинете</h2>

        <div class="personal__main__image">
            <img src="assets/images/personal-main-card.png" alt="" class="card">
            <img src="assets/images/personal-main.png" alt="" class="element">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-lg.png" alt="" class="ball-md">
        </div>


        <div class="personal__main__desc">
            <p class="main__text">Личный кабинет мерчанта в Betterbro – ценный источник знаний необходимых для роста <br class="for-desk">вашего бизнеса и эффективного операционного управления.</p>
        </div>
    </div>

    <!-- PERSONAL OPPORTUNITIES -->
    <div class="personal__opportunities">
        <h2 class="title">Вся нужная<br>информация<br>под рукой</h2>
        <ul class="table">
            <li>1
                <div class="table__block background__vertical">
                    <span class="dote__reverse"></span>
                    <img src="assets/images/token-icon1.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Поиск<span>транзакций</span></h3>
                        <p class="main__text">Используйте фильтры, <br class="for-desk">чтобы посмотреть <br class="for-desk">транзакции по дате <br class="for-desk">создания, методам оплаты, <br class="for-desk">дате и т.д.</p>
                    </div>
                </div>
            </li>
            <li>2
                <div class="table__block background__vertical">
                    <span class="dote__reverse"></span>
                    <img src="assets/images/token-icon2.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category"><span>Делегирование</span>&nbsp;</h3>
                        <p class="main__text">Подключайте сотрудников <br class="for-desk">и настраивайте права их <br class="for-desk">доступа для комплексного <br class="for-desk">управления платежами.</p>
                    </div>
                </div>
            </li>
            <li>3
                <div class="table__block background__vertical">
                    <span class="dote__reverse"></span>
                    <img src="assets/images/token-icon3.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Управляйте<span>спорами</span></h3>
                        <p class="main__text">Используйте отчетность <br class="for-desk">в качестве аргументации <br class="for-desk">при улаживании споров с <br class="for-desk">вашими клиентами.</p>
                    </div>
                </div>
            </li>
            <li>4
                <div class="table__block background__vertical">
                    <span class="dote__reverse"></span>
                    <img src="assets/images/token-icon4.svg" alt="" class="table__block__icon">
                    <div class="table__block__text">
                        <h3 class="title__category">Будьте в<span>курсе</span></h3>
                        <p class="main__text">Получайте уведомления <br class="for-desk">о важных событиях, <br class="for-desk">происходящих с оплатами.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <!-- PERSONAL call -->
    <div class="personal__call">
        <h2 class="title">Узнайте больше<br>о ваших платежах</h2>
        <div class="personal__call__image">
            <img src="assets/images/personal-call-card.png" alt="" class="card">
            <img src="assets/images/personal-call.png" alt="" class="element">
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