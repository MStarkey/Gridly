$(document).ready(function(){
    $('nav ul ul').hide();
    $(window).resize(function(){
        if($(window).width() < 1025) {
            $('#nav').hide();
            $('nav ul ul').hide();
        }
        if($(window).width() > 1025) {
            $('#nav').show();
        }
    });
    $('.menu').click(function(){
        $('#nav').slideToggle(1000);
    });
    $('nav ul li a').click(function() {
        if ($(this).next('ul').is('ul') ){
            var submenu = $(this).next('ul');
            if ( $(submenu).is(':hidden') ) {
                $(submenu).slideDown(500);
                return false;
            } else {
                $(submenu).slideUp(500);
                return false;
            }
        }
    });

    $('.slider').bxSlider({
        pager: true
    });

    $(function () {
        $(".news-summary-item").slice(0, 6).show();
        $("#load-more").on('click', function (e) {
            e.preventDefault();
            $(".news-summary-item:hidden").slice(0, 3).slideDown();
            if ($(".news-summary-item:hidden").length == 0) {
                $("#load-more").fadeOut('slow');
            }
            $('html,body').animate({
                scrollTop: $(this).offset().top -60
            }, 1500);
        });
    });
    var elem = $('.news-summary-item').size();
    if(elem <= 7){
        $('#load-more').hide();
    }
});
