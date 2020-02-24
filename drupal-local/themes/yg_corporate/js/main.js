(function ($) {
 Drupal.behaviors.yg_corporate = {
   attach: function (context, settings) {
          "use strict"; // Start of use strict

        /* ----------------------------------------------------------- */
            /*  Fixed header
            /* ----------------------------------------------------------- */


          // Smooth scrolling using jQuery easing
        // jQuery for page scrolling feature - requires jQuery Easing plugin
            
            
            $('a.js-scroll-trigger').on('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });


          // Closes responsive menu when a scroll trigger link is clicked
          $('.js-scroll-trigger').on('click', function(event) {
            $('.navbar-collapse').collapse('hide');
          });
        jQuery(document).ready(function( $ ) {


             var popup=function(){
                $('.portfolio-item .portfolio-popup').magnificPopup({
                    type: 'image',
                    removalDelay: 300,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true
                    },
                    zoom: {
                        enabled: false,
                        duration: 300,
                        easing: 'ease-in-out',
                        opener: function(openerElement) {
                            return openerElement.is('img') ? openerElement : openerElement.find('img');
                        }
                    }
                });
            }
            popup();
        });    

            
            
          
         // Banner Slider
            $('.banner-slider ').slick({
                vertical: true,
                autoplay:true,
                autoplaySpeed:5000,
                verticalSwiping: true,
                adaptiveHeight: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
        //        prevArrow: '<div><button class="prevArrow arrowBtn"><i class="fa fa-angle-left"></i></button></div>',
        //        nextArrow: '<div><button class="nextArrow arrowBtn"><i class="fa fa-angle-right"></i></button></div>',

                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        vertical: false,
                        verticalSwiping: false,

                    }
                }]
            });    
         // Banner Slider

        $(window).on('load', function(){
            var $container = $('.portfolioContainer');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
         
            $('.portfolioFilter a').click(function(){
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');
                $(".portfolioContainer .hide").addClass("portfolio-item");
                $(".portfolioContainer .portfolio-item").removeClass("hide");
                var selector = $(this).attr('data-filter');
                if(selector != "*")
                {
                    $(".portfolioContainer .categories:not( "
                    +selector+") .portfolio-item").addClass('hide');
                    $(".portfolioContainer .categories:not( "
                    +selector+") .hide").removeClass('portfolio-item');
                    
                }
                $('.portfolio-item .portfolio-popup').magnificPopup({
                    type: 'image',
                    removalDelay: 300,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true
                    },
                    zoom: {
                        enabled: false,
                        duration: 300,
                        easing: 'ease-in-out',
                        opener: function(openerElement) {
                            return openerElement.is('img') ? openerElement : openerElement.find('img');
                        }
                    }
                });

                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                 });
                 return false;
            }); 
        });
    $("ul.tabs").addClass("tabs-top");
    jQuery(window).scroll(function(){
       var scroll = $(window).scrollTop();
       if (scroll >= 90) {
           $("#main-menu").addClass("fixed-top ");
           $("ul.tabs").addClass("tabs-top");
       } else {
           $("#main-menu").removeClass("fixed-top");
           $("ul.tabs").removeClass("tabs-top");
       }

    });
         var main_color = drupalSettings.main_color;
        // alert("Main Color "+main_color);
        $(':root').css('--main-theme-color', main_color);

        $("time.timeago").timeago();
        $('.carousel-item:first-child').addClass('active');

}}})(jQuery, Drupal);// End of use strict