<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/init.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="assets/js/jquery.timepicker.min.js"></script>
<script>
    $("body").addClass("preload");
    $( window ).load(function() {
        $("body").removeClass("preload");
        $('#ui-datepicker-div').addClass( 'calendar__styles' );
    });

    if( /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        setTimeout(function () {
            var viewheight = $(window).height();
            var viewwidth = $(window).width();
            var viewport = document.querySelector("meta[name=viewport]");
            viewport.setAttribute("content", "height=" + viewheight + "px, width=" + viewwidth + "px, initial-scale=1.0");
        }, 300);
    }
    window.onorientationchange = function() { 
    var orientation = window.orientation; 
    switch(orientation) { 
        case 0:
        case 90:
        case -90: window.location.reload(); 
        break; } 
    };
    
</script>