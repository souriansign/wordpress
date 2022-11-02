$(function () {
    if (window.innerWidth <= 1025) {
        $(".header .js-accordion").on('click', function () {
            $(this).toggleClass('select');
            $(".header .js-accordion-cont").stop().slideToggle("slow");
        });
        $(".footer .js-accordion").on('click', function () {
            $(this).toggleClass('select');
            $(".footer .js-accordion-cont").stop().slideToggle("slow");
        });
    }

    $(".js-menu-trigger").on('click', function () {
        $(this).toggleClass('active');
        $(".js-menu-open").toggleClass('active');
    });

    $('.js-slider').slick({
        autoplay: true,
        speed: 1000,
        fade: true,
        swipe: false,
        arrows: false,
    });

    $(".protect").append('<img src="<?php echo get_template_directory_uri(); ?>/images/blank.gif" class="blank-img">');
});