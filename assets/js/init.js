$(document).ready(function () {


  //COOKIE
    $('.cookie__message__btn').click(function(){
		$('.cookie__message').hide();
		document.cookie = "cookie__message=true; max-age=31556926";
		return false;
	});

  


  //MODAL THANKS CLOSE
  $('.modal__thanks__btn').click(function(){
    $('.modal__thanks').removeClass('show');
  });

  // mobile-menu
  $('.ham-icon').click(function(){
    $('.header__nav').addClass('show');
    $('.ham-icon').hide();
    $('.ham-icon-close').show();
  });
  $('.ham-icon-close').click(function() {
    $('.header__nav').removeClass('show');
    $('.ham-icon').show();
    $('.ham-icon-close').hide();
  });
  


    //FAQ
    $('.faq-item').on('click', function () {
        if ($(this).hasClass('faq-item__open')) {
            $('.faq-item').removeClass('faq-item__open');
        } else {
            $('.faq-item').removeClass('faq-item__open');
            $(this).addClass('faq-item__open');
        }
    });


    //ANIMATION ON IMAGES
    setInterval(function(){
        $('.section__solution__image, .section__technologies__image, .section__start__left, .services__main__image, .services__call__image, .token__main__image, .token__call__image, .antifrod__main__image, .antifrod__call__image, .personal__main__image, .personal__call__image, .about__main__image, .about__start__left, .methods__main__image, .methods__call__image, .payments__main__image, .payments__call__image, .gapay__main__image, .gapay__call__image, .crypto__main__image, .cardpay__main__image, .cardpay__call__image, .contacts__start__left').toggleClass( "animate" );
    }, 2500);

    //Calendar
    let monthNamesRus = ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'];

    let d = new Date();
    let month =  (monthNamesRus[d.getMonth()]);
    let day = d.getDate();
    let year = d.getFullYear();
    $('#date').html("<span class='date_day'>" + day + "</span><span class='date_month'>" + month + "</span>");

    $('.contact__form__date__box__calendar').on('click', function() {
        $('#txtdate').datepicker('show');
    });
    

    $('#txtdate').datepicker({
        dateFormat : "dd MM yy",
        minDate: 0,
        monthNames : monthNamesRus,
        dayNamesMin : ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
        onSelect: function(selectedDate) {
            var arr = selectedDate.split(" ");
            $('#date').html("<span class='date_day'>" + arr[0] + "</span><span class='date_month'>" + arr[1] + "</span>");
        }
    });
    $('#txttime').timepicker({
        'timeFormat': 'H:i',
        'step': 60,
        'listWidth': 1,
        'minTime': '09:00',
        'maxTime': '19:00'
    });
    
});


//smooth scroll 
$('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr('tabindex','-1');
            $target.focus();
          };
        });
      }
    }
});

//FORM
$('#callform').on('submit', function(e) {
    e.preventDefault();

    var postData = new FormData();

    let form_data = {
        'Имя': $('#form__name').val(),
        'Телефон': $('#form__phone').val(),
        'Сайт или название компании': $('#form__site').val(),
        'Комментарий': $('#form__message').val(),
        'Дата': $('#txtdate').val(),
        'Время': $('#txttime').val()
    };

    for ( var key in form_data) {
      postData.append(key, form_data[key]);
    }

    $.ajax({
      url         : 'sendmail.php',
      data        : postData,
      processData : false,
      contentType : false,
      type: 'POST'
    }).done(function(data) {
      let response = JSON.parse(data);
        if (response.type === 'done') {
          $('.modal__thanks').addClass('show');
        }
    });
});