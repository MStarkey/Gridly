$(document).ready(function(){
    $('.menu-btn').on('click', function(e){

        $('body').toggleClass('menu-open');
        $('body').toggleClass('menu-closed');
        $('.page-overlay').fadeToggle('600');
        e.preventDefault();
        $(this).toggleClass('is-active');

    });
    // Close menu on page overlay click
    $('.page-overlay').on('click', function(e){

        $('body').toggleClass('menu-open');
        $('body').toggleClass('menu-closed');
        $('.page-overlay').fadeToggle('600');
        $('.menu-btn').toggleClass('is-active');

    });
});
