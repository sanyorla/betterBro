<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require('head.php') ?>
    <title>Антифрод</title>
</head>
<body>
<div class="wrapper antifrod">
    <?php require('header.php') ?>

    <!-- ANTIFROD MAIN -->
    <div class="antifrod__main">
        <h2 class="title">Безопасность платежей<br>с Betterbro Antifrod</h2>
        
        <div class="antifrod__main__image">
            <img src="assets/images/antifrod-main-card.png" alt="" class="card">
            <img src="assets/images/antifrod-main.png" alt="" class="element">
            <img src="assets/images/ball-lg.png" alt="" class="ball-sm">
            <img src="assets/images/ball-lg.png" alt="" class="ball-md">
        </div>

        <div class="antifrod__main__desc">
            <p class="main__text">Наша система анализирует каждую транзакцию и отклоняет подозрительные.<br>Это позволяет сохранить деньги ваших клиентов, если их карта была украдена,<br>и защищает ваш бизнес.</p>
        </div>
    </div>

    <!-- ANTIFROD OPPORTUNITIES -->
    <div class="antifrod__opportunities">
        <h2 class="title">Ваши платежи<br>под защитой Betterbro</h2>
        <ul class="table">
            <li>1
                <div class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <div class="table__block__top">
                        <img src="assets/images/antifrod-icon1.svg" alt="" class="table__block__icon">
                        <h3 class="title__category">Точное определение<span>подозрительных операций</span></h3>
                    </div>
                        <p class="main__text">Умный скоринг включает сотни фильтров через которые проходит каждая <br class="for-desk">транзакция. В зависимости от истории поведения пользователя, его <br class="for-desk">региона и специфики вашего бизнеса, Betterbro анализирует риски и <br class="for-desk">автоматически решает пропустить ли транзакцию.</p>
                </div>
            </li>
            <li>2
            <div class="table__block background__horizontal">
                <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                <div class="table__block__top">
                    <img src="assets/images/antifrod-icon2.svg" alt="" class="table__block__icon">
                    <h3 class="title__category">Повышение <span>лояльности</span></h3>
                </div>
                    <p class="main__text">Имидж надежной компании, которая заботится о деньгах своих <br class="for-desk">клиентов позитивно сказывается и на доходах. Проверено.</p>
                </div>
            </li>
            <li>3
                <div class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <div class="table__block__top">
                        <img src="assets/images/antifrod-icon3.svg" alt="" class="table__block__icon">
                        <h3 class="title__category">Минимум возврата <span>платежей</span></h3>
                    </div>
                        <p class="main__text">Благодаря минимизации мошеннических операций вам не придется <br class="for-desk">возвращать средства клиентам, чьи данные были украдены по какой-либо <br class="for-desk">причине, а также переживать за возможные штрафы <br class="for-desk">от финансовых организаций.</p>
                </div>
            </li>
            <li>4
                <div class="table__block background__horizontal">
                    <span class="dote for-desk"></span>
                    <span class="dote__reverse for-mob"></span>
                    <div class="table__block__top">
                        <img src="assets/images/antifrod-icon4.svg" alt="" class="table__block__icon">
                        <h3 class="title__category">Гибкая <span>настройка</span></h3>
                    </div>
                        <p class="main__text">У каждого бизнеса своя специфика, особенно, если это касается <br class="for-desk">высокорисковых сфер. Betterbro позволяет настраивать антифрод систему, <br class="for-desk">соблюдая баланс между безопасностью и доходностью.</p>
                </div>
            </li>
        </ul>
    </div>

    <!-- ANTIFROD call -->
    <div class="antifrod__call">
        <h2 class="title">Узнайте, как <span>Betterbro</span> сможет <br class="for-desk">защитить ваши транзакции</h2>
        <div class="antifrod__call__image">
            <img src="assets/images/antifrod-call-card.png" alt="" class="card">
            <img src="assets/images/antifrod-call.png" alt="" class="element">
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