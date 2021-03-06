require('jquery')
require ('jquery-migrate')

const jQuery = require('jquery')
window.$ = window.jquery = require('jquery')
require('waypoints/lib/jquery.waypoints')

require('animate.css')
require('jquery.easing/jquery.easing');
require('jquery.stellar/jquery.stellar')
require('timepicker')
require('./bootstrap')
require('@fortawesome/fontawesome-free')
require('bootstrap-datepicker')
require('magnific-popup/src/js/core')
require('timepicker/jquery.timepicker')
require('owl.carousel')
require('scrollax/scrollax')
require('jquery.animate-number')


const AOS = require ('aos')
const { default: Axios } = require('axios')
const { default: Swal } = require('sweetalert2')
const Toast = Swal.mixin({
    toast:true,
    position: 'top-right',
    timer: 3500,
    timerProgressBar:true
})
window.Aos = AOS

AOS.init({
    duration: 800,
    easing: 'slide'
});

(function($) {

    "use strict";

    $(window).stellar({
   responsive: true,
   parallaxBackgrounds: true,
   parallaxElements: true,
   horizontalScrolling: false,
   hideDistantElements: false,
   scrollProperty: 'scroll',
   horizontalOffset: 0,
   verticalOffset: 0
});

 // Scrollax
 $.Scrollax();


 var fullHeight = function() {

     $('.js-fullheight').css('height', $(window).height());
       $(window).resize(function(){
           $('.js-fullheight').css('height', $(window).height());
       });

    };
    fullHeight();

    // loader
    var loader = function() {
        setTimeout(function() {
            if($('#nos-loader').length > 0) {
                $('#nos-loader').removeClass('show');
           }
        }, 2000);
    };
   loader();

   // Scrollax
   $.Scrollax();

   var carousel = function() {
       $('.home-slider').owlCarousel({
       loop:true,
       autoplay: true,
       margin:0,
       animateOut: 'fadeOut',
       animateIn: 'fadeIn',
       nav:false,
       autoplayHoverPause: false,
       items: 1,
       navText : ["<span class='ion-md-arrow-back'></span>","<span class='ion-chevron-right'></span>"],
       responsive:{
           0:{
           items:1,
           nav:false
        },
         600:{
             items:1,
             nav:false
            },
         1000:{
             items:1,
           nav:false
        }
    }
});
$('.carousel-work').owlCarousel({
           autoplay: true,
           center: true,
           loop: true,
           items:1,
           margin: 30,
           stagePadding:0,
           nav: true,
           navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
           responsive:{
               0:{
                   items: 1,
                   stagePadding: 0
                },
                600:{
                    items: 2,
                   stagePadding: 50
                },
               1000:{
                   items: 3,
                   stagePadding: 100
                }
           }
        });

    };
    carousel();

    $('nav .dropdown').hover(function(){
       var $this = $(this);
       // 	 timer;
       // clearTimeout(timer);
       $this.addClass('show');
       $this.find('> a').attr('aria-expanded', true);
       // $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
       $this.find('.dropdown-menu').addClass('show');
    }, function(){
        var $this = $(this);
        // timer;
        // timer = setTimeout(function(){
            $this.removeClass('show');
           $this.find('> a').attr('aria-expanded', false);
           // $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
           $this.find('.dropdown-menu').removeClass('show');
           // }, 100);
        });


        $('#dropdown04').on('show.bs.dropdown', function () {
            console.log('show');
        });

        // scroll
        function scrollWindow() {
            $(window).scroll(function(){
                var $w = $(this),
                st = $w.scrollTop(),
                navbar = $('.nos_navbar'),
                sd = $('.js-scroll-wrap');

                if (st > 150) {
                    if ( !navbar.hasClass('scrolled') ) {
                        navbar.addClass('scrolled');
                    }
           }
           if (st < 150) {
               if ( navbar.hasClass('scrolled') ) {
                   navbar.removeClass('scrolled sleep');
               }
           }
           if ( st > 350 ) {
               if ( !navbar.hasClass('awake') ) {
                   navbar.addClass('awake');
                }

                if(sd.length > 0) {
                   sd.addClass('sleep');
                }
            }
           if ( st < 350 ) {
               if ( navbar.hasClass('awake') ) {
                   navbar.removeClass('awake');
                   navbar.addClass('sleep');
               }
               if(sd.length > 0) {
                   sd.removeClass('sleep');
                }
            }
        });
    };
    scrollWindow();
   var counter = function() {

       $('#section-counter').waypoint( function( direction ) {

           if( direction === 'down' && !$(this.element).hasClass('nos-animated') ) {

               var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
               $('.number').each(function(){
                   var $this = $(this),
                   num = $this.data('number');
                       console.log(num);
                       $this.animateNumber(
                           {
                               number: num,
                               numberStep: comma_separator_number_step
                            }, 7000
                            );
               });

           }

        } , { offset: '95%' } );

    }
    counter();

    var OnePageNav = function() {
        $(".smoothscroll[href^='#'], #nos-nav ul li a[href^='#']").on('click', function(e) {
            e.preventDefault();

            var hash = this.hash,
            navToggler = $('.navbar-toggler');
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 700, 'easeInOutExpo', function(){
                window.location.hash = hash;
            });


            if ( navToggler.is(':visible') ) {
                navToggler.click();
            }
       });
       $('body').on('activate.bs.scrollspy', function () {
           console.log('nice');
       })
    };
    OnePageNav();


    // magnific popup
    $('.image-popup').magnificPopup({
   type: 'image',
   closeOnContentClick: true,
   closeBtnInside: true,
   fixedContentPos: true,
   mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
     verticalFit: true
    },
    zoom: {
        enabled: true,
        duration: 300 // don't foget to change the duration also in CSS
    }
 });

 $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
     disableOn: 700,
     type: 'iframe',
     mainClass: 'mfp-fade',
     removalDelay: 160,
     preloader: false,

     fixedContentPos: false
    });


 $('.appointment_date').datepicker({
     'format': 'm/d/yyyy',
     'autoclose': true
    });

    $('.appointment_time').timepicker();

    var contentWaypoint = function(){
        var i = 0;
        $('.nos-animate').waypoint( function( direction ) {

            if( direction === 'down' && !$(this.element).hasClass('nos-animated') ) {

                i++;

                $(this.element).addClass('item-animate');
                setTimeout(function(){

                    $('body .nos-animate.item-animate').each(function(k){
                        var el = $(this);
                        setTimeout( function () {
                            var effect = el.data('animate-effect');
                            if ( effect === 'fadeIn') {
                                el.addClass('fadeIn nos-animated');
                                el.removeClass('nos-animate')
                            } else if ( effect === 'fadeInLeft') {
                                el.addClass('fadeInLeft nos-animated');
                                el.removeClass('nos-animate')
                            } else if ( effect === 'fadeInRight') {
                                el.addClass('fadeInRight nos-animated');
                                el.removeClass('nos-animate')
                            } else {
                                el.addClass('fadeInUp nos-animated');
                                el.removeClass('nos-animate')
                            }
                            el.removeClass('item-animate');
                        },  k * 50, 'easeInOutExpo' );
                    });

                }, 100);

            }

        } , { offset: '95%' } );
}
contentWaypoint()

$('#bookingForm').submit((e)=>{
    e.preventDefault()
    const data = {
        full_name: $('input#booking_full_name').val(),
        date: $('input#booking_date').val(),
        time: $('input#booking_time').val(),
        phone: $('input#booking_phone').val(),
        message: $('textarea#booking_message').val(),
        people: $('input#booking_people').val()
    }
    Axios.post('/booking', data)
    .then((res) => {
        if(res.status === 201){
            $('#bookingForm').trigger('reset')
            Toast.fire({
                title: 'SEE YOU THEN!',
                text: res.data,
                icon: 'success'
            })
        }else{
            Toast.fire({
                icon:'warning',
                title: 'Be Warned',
                text: res.data
            })
        }
    }).catch((err) => {
        Toast.fire({
            title:'Something is missing...',
            text:err.message,
            icon:'error'
        })
    });

    console.log(data);
})



})(jQuery);



