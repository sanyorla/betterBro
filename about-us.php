<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require('head.php') ?>    
    <title>О Нас</title>
</head>
<body>
<div class="wrapper about">
    <?php require('header.php') ?>
    <!-- SECTION SOLUTION  -->
    <div class="about__main">
    <h1 class="title for-mob">Платежный агрегатор<br>не для всех</h1>
        <div class="about__main__image">
            <img src="assets/images/about-main-card.png" alt="" class="card">
            <img src="assets/images/about-main.png" alt="" class="element">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-lg.png" alt="" class="ball-md">
        </div>
        <div class="about__main__info">
            <h1 class="title for-desk">Платежный агрегатор<br>не для всех</h1>
            <p class="main__text">В отличие от других платежных продуктов, Betterbro изначально создавался <br class="for-desk">специально для хай-риск сегмента. ​​Наш подход – это сочетание гибкости и <br class="for-desk">передовых финтех разработок с прозрачностью, стабильностью и <br class="for-desk">надежностью традицинного банкинга.</p>
            <div class="about__main__numbers">
                <div class="column">
                    <p class="column__count">8<span>M+</span></p>
                    <p class="column__info">Транзакций <span>в месяц</span></p>
                </div>
                <div class="column">
                    <p class="column__count">100</p>
                    <p class="column__info">Валют и<span>18 платежных методов</span></p>
                </div>
                <div class="column">
                    <p class="column__count">~14<span>%</span></p>
                    <p class="column__info">Увеличение конверсии <span>у наших клиентов</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="about__simple">
        <h2 class="title">Мы стараемся сделать жизнь <br class="for-desk">бизнеса немного проще</h2>
        <div class="about__simple__box background__vertical">
            <span class="dote__reverse for-mob"></span>
            <img src="assets/images/simple-icon.svg" alt="">
            <p class="main__text">В арсенале Betterbro десятки платежных решений. Мы следим за трендами, используем последние <br class="for-desk">технологии и те методы, которыми хотят платить ваши клиенты. Другими словами, не только обслуживаем <br class="for-desk">платежи, но и стараемся помочь нашим клиентам с ростом и масштабированием. </p>
        </div>
    </div>

    <div class="about__start">
        <div class="about__start__left">
            <img src="assets/images/start-card.png" alt="" class="card">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-md.png" alt="" class="ball-md">
            <div class="about__start__text">
            <h2 class="title">Хотите узнать<br>больше, просто<br>напишите!</h2>
            <p class="main__text">Возможно, вы хотите подробнее разобраться в нашем <br class="for-desk">продукте. Возможно, вы хотите присоединиться к команде и <br class="for-desk">помочь нам с разработкой Betterbro. Или получить <br class="for-desk">комментарий для публикации. Воспользуйтесь кнопкой <br class="for-desk">обратной связи и мы ответим в кратчайшие сроки. </p>
            </div>
        </div>
        <div class="about__start__right">
            <?php require('contactForm.php') ?>
        </div>
    </div>
    <?php require('footer.php') ?>
</div>
<?php require('scripts.php') ?>
</body>
</html>