//loader
$(function() {
    $('.loader-container').fadeOut(2000);
})

//show password
$(document).on('click', '.password__icon', function() {
    let myInput = $(this).siblings('.form__password');
    $(this).toggleClass('fa-eye fa-eye-slash')
    if(myInput.attr("type") === "password") {
        myInput.attr("type", "text");
    }else {
        myInput.attr("type", "password");
    }
});

// register input file
$( ".file__group .lg__control").change( function() {
    $(this).parents('.file__group').find('.please__txt').fadeOut();
    $(this).parents('.file__group').find('.remove__img').fadeIn();
    $(this).parents('.file__group').find('.icon__user').addClass('full__width');
});

$( ".return__photo").click( function() {
    $(this).fadeOut();
    $(this).siblings('.profileAvatarPreview').find('.icon__user').removeClass('full__width');
    $(this).siblings('.profileAvatarPreview').find('.please__txt').fadeIn();
});

$(document).ready(function(){
    $(".code__input").keyup(function(){
        $(this).blur();
        $(this).next().focus();
    });
});

// sidebar menu toggle
$(document).on('click', '#sidebar_toggler', function() {
    $('.sidebar-wrapper').addClass('sidebar-show');
    $('.mob-overlay').addClass('active');
    $('body').addClass('overflow__hidden');
});

$(document).on('click', '#burgerBtn', function() {
    $('.sidebar-wrapper').removeClass('sidebar-show');
    $('.mob-overlay').removeClass('active');
    $('body').removeClass('overflow__hidden');
});

$(document).on('click', '.mob-overlay', function() {
    $('.sidebar-wrapper').removeClass('sidebar-show');
    $('.mob-overlay').removeClass('active');
    $('body').removeClass('overflow__hidden');
});

// testimonials slider
$(function(){

    var is_rtl = $("html[lang='ar']").length > 0;

    $('.samahLgal_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        rtl: is_rtl,
        dots: true,
        arrows: true,
        loop: true,
        autoplay: true,
        autoplaySpeed: 5000,
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>',
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
        speed: 500,
        responsive: [{

            breakpoint: 992,
            settings: {
                arrows: false
            }

        },
            {

                breakpoint: 768,
                settings: {
                    arrows: false
                }

            },
            {

                breakpoint: 576,
                settings: {
                    arrows: false
                }

            }

        ]
    });
});

// mobile menu toggle
if ($(window).width() < 992) {
    $(document).on('click', '.nav-link .fa-plus', function(e) {
        e.preventDefault();
        $(this).parent().next('.dropdown__Firstmenu').slideToggle(500);
    });
}

// privacy menu toggle
$(document).on('click', '.openCollapse_one', function() {
    $(this).next('.privCol_body').slideToggle(500);
    $(this).parent('.privCol_Card').siblings('.privCol_Card').find('.privCol_body').slideUp();
    $(this).children('i.prvCol__icon').toggleClass('rotate__arrCollapse');
    $(this).parent('.privCol_Card').siblings('.privCol_Card').find('i.prvCol__icon').removeClass('rotate__arrCollapse');
});

$(function() {

    $('.fancybox').fancybox({
    });

    $('#stepExample1').timepicker({ 'step': 1 });
});

// time select
$(document).ready(function() {

    $('select.nice-select').niceSelect();

});

// testimonials slider
$(function(){

    var is_rtl = $("html[lang='ar']").length > 0;

    $('.testOne__slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        rtl: is_rtl,
        dots: true,
        arrows: true,
        loop: true,
        autoplay: true,
        autoplaySpeed: 10000,
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>',
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
        fade: true,
        cssEase: 'linear',
        speed: 500,
        responsive: [{

            breakpoint: 992,
            settings: {
                arrows: false
            }

        },
            {

                breakpoint: 768,
                settings: {
                    arrows: false
                }

            },
            {

                breakpoint: 576,
                settings: {
                    arrows: false
                }

            }

        ]
    });
});

// translate testimonials slider
$(function(){

    var is_rtl = $("html[lang='ar']").length > 0;

    $('.tranlateTS__slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        rtl: is_rtl,
        dots: true,
        arrows: false,
        loop: true,
        autoplay: true,
        autoplaySpeed: 10000,
        fade: true,
        cssEase: 'linear',
        speed: 500
    });
});

// offices slider
$(document).ready(function(){

    var is_rtl = $("html[lang='ar']").length > 0;

    $('.office__Slider').slick({
        draggable: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        rtl: is_rtl,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        infinite: true,
        pauseOnHover: false,
    });
});

// scroll top button
$(function () {

    var scrollButton = $('.go-top');

    $(window).scroll(function () {

        if($(window).scrollTop() >= 500) {
            scrollButton.show();
        }else {
            scrollButton.hide();
        }

        if($(window).scrollTop() >= 100) {
            $('header').addClass('header__shadow');
        }else {
            $('header').removeClass('header__shadow');
        }

    });

    scrollButton.click(function () {
        $('html, body').animate({scrollTop: 0});
    })
});


// counter 1
$(document).ready(function() {

    var counters = $(".statNum_nPlus");
    var countersQuantity = counters.length;
    var counter = [];

    for (i = 0; i < countersQuantity; i++) {
        counter[i] = parseInt(counters[i].innerHTML);
    }

    var count = function(start, value, id) {
        var localStart = start;
        setInterval(function() {
            if (localStart < value) {
                localStart++;
                counters[id].innerHTML = localStart;
            }
        }, 50);
    }

    for (j = 0; j < countersQuantity; j++) {
        count(1, counter[j], j);
    }
});

// services testimonials slider
$(function(){

    var is_rtl = $("html[lang='ar']").length > 0;

    $('.ServicesTS__slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        rtl: is_rtl,
        dots: true,
        arrows: false,
        loop: true,
        autoplay: true,
        autoplaySpeed: 10000,
        speed: 500,
        responsive: [{

            breakpoint: 992,
            settings: {
                arrows: false
            }

        },
            {

                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                }

            },
            {

                breakpoint: 576,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                }

            }

        ]
    });
});

// shabban testimonials slider
$(function(){

    var is_rtl = $("html[lang='ar']").length > 0;

    $('.ShabbanTS__slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        rtl: is_rtl,
        dots: true,
        arrows: true,
        loop: true,
        autoplay: true,
        autoplaySpeed: 10000,
        nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>',
        prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
        speed: 500,
        responsive: [{

            breakpoint: 992,
            settings: {
                arrows: false,
                dots: false,
            }

        },
            {

                breakpoint: 768,
                settings: {
                    arrows: false,
                    dots: false,
                }

            },
            {

                breakpoint: 576,
                settings: {
                    arrows: false,
                    dots: false,
                }

            }

        ]
    });
});

// chat menu toggle
$(document).on('click', '.cahtHome_btn', function() {
    $('.chatAbs_Card').slideToggle(500);
    var scrollChat = $('#chatsW_Wrapper');
    scrollChat.scrollTop(scrollChat.prop("scrollHeight"));
});

$(document).on('click', '.close__chat', function() {
    $('.chatAbs_Card').slideToggle(500);
});
