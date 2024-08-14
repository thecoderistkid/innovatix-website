$(function(){

    initScreen();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) { // Change 50 to the number of pixels after which you want to change the navbar color
          $('.navbar').addClass('bg-navbar');
        } else {
          $('.navbar').removeClass('bg-navbar');
        }

        if ($(this).scrollTop() > 20) {
            $('#scrollToTopBtn').fadeIn();
        } else {
            $('#scrollToTopBtn').fadeOut();
        }
    });

    $('.text-service').hover(
        function() {
            id = $(this).data('img')
            $('#img_service').fadeOut(300, function() {
                $('#img_service').attr('src', '/images/ps'+id+'.svg').fadeIn(300);
            });
        },
        function() {
            $('#img_service').fadeOut(300, function() {
                $('#img_service').attr('src', '/images/ps1.svg').fadeIn(300);
            });
        }
    );

    

    // When the button is clicked, scroll to the top of the document
    $('#scrollToTopBtn').click(function() {
        $('html, body').animate({scrollTop : 20}, 800);
        return false;
    });
    AOS.init();
    new Swiper(".about-swiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "2",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        navigation: {
            nextEl: '#swiper-next-about',
            prevEl: '#swiper-prev-about',
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });


    new Swiper('.hero-swiper', {
        effect: 'fade',
        fadeEffect: {
          crossFade: true,
        },
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        loop: true,
        initialSlide : 1
    });

    new Swiper(".product-swiper", {
        slidesPerView: "auto",
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
        },
    });
})


function initScreen(){
    navHeight = $('.navbar').height();
    windowHeight = $(window).height();
    windowWidth = $(window).width();
    heroHeight = windowHeight - navHeight;

    $('.hero').css("min-height", heroHeight+"px")
    $('body').width(windowWidth);

    if (windowWidth > windowHeight) {
        
        $('.product-swiper-slide').width(windowWidth*0.4);
    }else{

        $('.product-swiper-slide').width(windowWidth*0.7);
    }
}