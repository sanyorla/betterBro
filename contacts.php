<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require('head.php') ?>    
    <title>Контакты</title>
</head>
<body>
<div class="wrapper contacts">
    <?php require('header.php') ?>

    <div class="contacts__start">
        <div class="contacts__start__left">
            <img src="assets/images/start-card.png" alt="" class="card">
            <img src="assets/images/contacts-start.png" alt="" class="element for-mob">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-md.png" alt="" class="ball-md">
            <div class="contacts__start__text">
            <h2 class="title">Свяжитесь с нами</h2>
            <p class="main__text">Команда Betterbro c радостью ответит на все ваши вопросы и<br class="for-desk">поможет подобрать идеальное платежное решение для вашего<br class="for-desk">бизнеса. Просто заполните форму ниже!</p>
            </div>
        </div>
        <div class="contacts__start__right">
            <?php require('contactForm.php') ?>
        </div>
    </div>
    <?php require('footer.php') ?>
</div>
<?php require('scripts.php') ?>
</body>
</html>