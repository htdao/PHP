$(window).load(function() {
    "use strict";
    // Grid slider,used on index_2.html
    $('#grid-slider').flexslider({
        animationSpeed: 300,
        animation: "slide",
        smoothHeight: true,
        easing: "easeInOutCirc",
        controlNav: false,
        nextText: '<i class="ti-angle-right"></i>',
        prevText: '<i class="ti-angle-left"></i>'
    });
    // The slider being synced must be initialized first
    $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 150,
        itemMargin: 5,
        asNavFor: '#slider'
    });

    $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
    });


    // The slider being synced must be initialized first
    $('#carousel-2').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 80,
        itemMargin: 5,
        asNavFor: '#slider-2'
    });

    $('#slider-2').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel-2"
    });


    // The slider being synced must be initialized first
    $('#carousel-3').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 80,
        itemMargin: 5,
        asNavFor: '#slider-3'
    });

    $('#slider-3').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel-3"
    });

    
    $('.mainSlide').owlCarousel({
        center: true,
        loop: true,
        margin: 10,
        stagePadding: 50,
        autoplay: true,
        dots: false,
        nav: true,
        navText: [
            '<i class="ti-angle-left"></i>',
            '<i class="ti-angle-right"></i>'
        ],
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                center: false
            },
            600: {
                items: 2,
                center: false
            },
            960: {
                items: 2
            },
            1170: {
                items: 3
            },
            1300: {
                items: 4
            }
        }
    });

    $('.bottom-posts').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        nav: true,
        navText: [
            '<i class="ti-angle-left"></i>',
            '<i class="ti-angle-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false,
                dots: true
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            },
            1300: {
                items: 4,
                nav: true,
                loop: false
            }
        }
    });

    $('.blogCarousel').owlCarousel({
        items: 1,
        merge: true,
        loop: true,
        margin: 10,
        video: true,
        nav: true,
        dots: false,
        lazyLoad: true


    });

    $('.best-read').owlCarousel({
        animateOut: 'fadeOutLeft',
        animateIn: 'slideInDown',
        items: 1,
        margin: 0,
        smartSpeed: 450,
        nav: false,
        dots: false
    });

    $('.banner').owlCarousel({
        animateOut: 'fadeOutLeft',
        animateIn: 'slideInDown',
        items: 1,
        margin: 0,
        smartSpeed: 450,
        nav: false,
        dots: true,
        autoHeight: true,
        autoplayTimeout: 3000

    });

    $('.blog-slider').owlCarousel({
        items: 1,
        smartSpeed: 450,
        nav: false,
        dots: false
    });

    $('.recomended').owlCarousel({
        loop: true,
        margin: 15,
        dots: false,
        nav: true,
        navText: [
            '<i class="ti-angle-left"></i>',
            '<i class="ti-angle-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    
    // Isotope init
    $('.row-isotope').isotope({
        itemSelector: '.item',
        layoutMode: 'masonry',
        masonry: {
            columnWidth: '.grid-sizer'
        }
    });


  // Pagination active state

    $('.dot-nav li').on('click', function() {

        $(this).siblings().removeClass('active');
        $(this).addClass('active');

    });

});


// Seetings for loader
$(document).ready(function() {
    "use strict";
     
    $(".animsition").animsition({

        inClass: 'fade-in',
        outClass: 'fade-out',
        inDuration: 1500,
        outDuration: 1500,
        linkElement: '.animsition-link',
        // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
        loading: true,
        loadingParentElement: 'body', //animsition wrapper element
        loadingClass: 'animsition-loading',
        unSupportCss: ['animation-duration',
            '-webkit-animation-duration',
            '-o-animation-duration'
        ],
        //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
        //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".

        overlay: false,

        overlayClass: 'animsition-overlay-slide',
        overlayParentElement: 'body'
    });
// Responsive video 
    $(".responsive-video").fitVids();
// Responsive tabs
    $('.nav-tabs:first').tabdrop({
        text: '<i class="ti-menu"></i>'
    });
// Light box image
    $('.popup-img').magnificPopup({
        type: 'image'
            // other options
    });

    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
// Add image via data 
    $(".bg-image").css('background', function() {
        var bg = ('url(' + $(this).data("image-src") + ') no-repeat center center');
        return bg;
    });
    // fit image nicely
    $(".bg-image").css("background-size", "cover");

   // Fix menu on scroll and add some animation
    $(function() {
        var header = $("#nav-wrap"),
            yOffset = 0,
            triggerPoint = 150;
        $(window).scroll(function() {
            yOffset = $(window).scrollTop();

            if (yOffset >= triggerPoint) {
                header.addClass("navbar-fixed-top animated fadeInDown shrink");
            } else {
                header.removeClass("navbar-fixed-top animated fadeInDown shrink");
            }

        });
    });

// Activate menu

    jQuery("#menuzord").menuzord({
        align: "right"
    });

// Instagram plugin,set your username: 
    $('.instagram').instagramLite({
        username: 'homepolish',
        clientID: '467ede5a6b9b48ae8e03f4e2582aeeb3',
        limit: 12,
        urls: true,
        loadMore: true,
        error: function(errorCode, errorMessage) {

            console.log('There was an error');

            if (errorCode && errorMessage) {

                alert(errorCode + ': ' + errorMessage);

            }

        },
        success: function() {
            console.log('The request was successful!');
        }
    });
 // Collapse,icon change
    $('.collapse').on('shown.bs.collapse', function() {
        $(this).parent().find(".ti-plus").removeClass("ti-plus").addClass("ti-minus");
    }).on('hidden.bs.collapse', function() {
        $(this).parent().find(".ti-minus").removeClass("ti-minus").addClass("ti-plus");
    });


});


// Ripple-effect animation for buttons
(function($) {
    "use strict";
    $(".ripple-effect").click(function(e) {
        var rippler = $(this);

        // create .ink element if it doesn't exist
        if (rippler.find(".ink").length == 0) {
            rippler.append("<span class='ink'></span>");
        }

        var ink = rippler.find(".ink");

        // prevent quick double clicks
        ink.removeClass("animate");

        // set .ink diametr
        if (!ink.height() && !ink.width()) {
            var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
            ink.css({
                height: d,
                width: d
            });
        }

        // get click coordinates
        var x = e.pageX - rippler.offset().left - ink.width() / 2;
        var y = e.pageY - rippler.offset().top - ink.height() / 2;

        // set .ink position and add class .animate
        ink.css({
            top: y + 'px',
            left: x + 'px'
        }).addClass("animate");
    })
})(jQuery);