<form method="POST" id="callform" name="callform" class="contact__form" autocomplete="off" action="./sendmail.php">
    <div class="contact__form__group background__horizontal">
        <input type="text" class="contact__form__field" id="form__name" name="form__name" placeholder="Имя">
    </div>
    <div class="contact__form__group">
        <input type="tel" class="contact__form__field" id="form__phone" name="form__phone" placeholder="Телефон" required>
    </div>
    <div class="contact__form__group">
        <input type="text" class="contact__form__field" id="form__site" name="form__site" placeholder="Сайт или название компании">
    </div>
    <div class="contact__form__group">
        <textarea type="text" class="contact__form__field contact__form__field__textarea" id="form__message" name="form__message" placeholder="Комментарий..."></textarea>
    </div>
    <div class="contact__form__date ">
        <p>Когда Вам перезвонить?</p>
        <div class="contact__form__date__box background__horizontal">
            
            <div class="contact__form__date__box__calendar">
            <img src="assets/images/date-icon.svg" alt="">
                <div id='date' class="date">
                    <span class='date_day'></span>
                    <span class='date_month'></span>
                    <span class='date_year'></span>
                </div>

                <input id="txtdate" class="" type="text" placeholder="" style="opacity:0;">
            </div>
            <div class="contact__form__date__box__time">
                <img src="assets/images/date-icon.svg" alt="">
                <input id="txttime"  class="" type="text" placeholder="09:00" maxlength="0" >
            </div>
        </div>
        
    </div>

    <div class="contact__form__group button">
        <button type="submit" class="btn__main" >Отправить</button>
    </div>

</form>