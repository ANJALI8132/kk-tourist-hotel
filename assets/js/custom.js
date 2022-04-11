(function($) {

    "use strict";
    var win = $(window);

    win.on('scroll', function() {

        var scroll = win.scrollTop();

        if (scroll < 800) {

            $("#sticky_funtion").removeClass("menu_secfixed");

        } else {

            $("#sticky_funtion").addClass("menu_secfixed");

        }

    });



    // :: 2.0 NAVIGATION MENU ACTIVE CODE
    function navMenu() {

        // MAIN MENU TOGGLER ICON (MOBILE SITE ONLY)
        $('[data-toggle="navbarToggler"]').click(function () {
            $('.navbar').toggleClass('active');
            $('body').toggleClass('canvas-open');
        });
        // MAIN MENU TOGGLER ICON
        $('.navbar-toggler').click(function () {
            $('.navbar-toggler-icon').toggleClass('active');
        });

        // NAVBAR STICKY
        var $stickyNav = $(".navbar-sticky");

        $(window).on("scroll load", function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 120) {
                $stickyNav.addClass("navbar-sticky-moved-up");
            } else {
                $stickyNav.removeClass("navbar-sticky-moved-up");
            }
            // apply transition
            if (scroll >= 250) {
                $stickyNav.addClass("navbar-sticky-transitioned");
            } else {
                $stickyNav.removeClass("navbar-sticky-transitioned");
            }
            // sticky on
            if (scroll >= 500) {
                $stickyNav.addClass("navbar-sticky-on");
            } else {
                $stickyNav.removeClass("navbar-sticky-on");
            }

        });
    }
    navMenu();

    /*sidenav*/
    function openSideNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    
    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }



    //Testimonials SLIDER ACTIVE CODE
    $('.testi-slider.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        smartSpeed: 2000,
        autoplay: true,
        responsiveClass: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            576: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1,
                dots: true
            }
        }
    });

    //room-slider

    $('.room-slider.owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        smartSpeed: 2000,
        autoplay: false,
        responsiveClass: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
                
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
               
            }
        }
    });


    //Facility SLIDER ACTIVE CODE
    $('.facility-slider.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        smartSpeed: 2000,
        autoplay: true,
        responsiveClass: true,
        autoplayTimeout: 4000,
        // navText: ['<i class="fi ti-angle-left"></i>', '<i class="fi ti-angle-right"></i>'],
        responsive: {
            0: {
                items: 1,
                margin: 20
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3,
                margin: 30
            }
        }
    });

    // News SLIDER ACTIVE CODE
    $('.news-slider.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        smartSpeed: 2000,
        autoplay: true,
        responsiveClass: true,
        autoplayTimeout: 4000,
        navText: ['<i class="fi ti-angle-left"></i>', '<i class="fi ti-angle-right"></i>'],
        responsive: {
            0: {
                items: 1,
                margin: 20
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3,
                margin: 20,
                nav: true
            }
        }
    });

     // BANNER SLIDER ACTIVE CODE
     $('.banner-slider.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        smartSpeed: 2000,
        autoplay: false,
        responsiveClass: true,
        autoplayTimeout: 4000,
        // navText: ['<i class="fi ti-angle-left"></i>', '<i class="fi ti-angle-right"></i>'],
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: true
            },
            576: {
                items: 1,
                nav: false,
                dots: true
            },
            768: {
                items: 1,

            },
            992: {
                items: 1,
                nav: false
            }
        }
    });

    // :: COUNTERUP ACTIVE CODE
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    // :: AOS ACTIVE CODE
    AOS.init();

    // :: 8.0 PREVENT DEFAULT ACTIVE CODE
    $("a[href='#']").on('click', function ($) {
        $.preventDefault();
    });



})(jQuery);

$(document).ready(function(){
    //mobile book now btn 
    $('.mobile_btn').click(function() {
        $('.panel-menu').hide();
        $('.mm-open .mm-fullscreen-bg').attr('style','background: transparent');
    });
})



$(document).ready(function(){

	

	$(window).on('load', function() {

  $('#status').fadeOut(); 

  $('#preloader').delay(350).fadeOut('slow');  

  $('body').delay(350).css({'overflow':'visible'});

});



setTimeout(function() {

  $('.enquiry_sidebar').removeClass('enq-show');

}, 700); 



	$('.qebtn').click(function(){

		$('body').toggleClass('custom-pop-active');	

	});

      

    $('.enq_closs').click(function(){

		$('body').removeClass('custom-pop-active');

		

	});



});



   $(document).ready(function() {

        $('.cus-select').select2();

    });



 $('#datepicker').datepicker({

        weekStart: 1,

        daysOfWeekHighlighted: "6,0",

        autoclose: true,

        todayHighlight: true,

    });


    $('#datepicker2').datepicker({

        weekStart: 1,

        daysOfWeekHighlighted: "6,0",

        autoclose: true,

        todayHighlight: true,

    });

    $('#datepicker3').datepicker({

        weekStart: 1,

        daysOfWeekHighlighted: "6,0",

        autoclose: true,

        todayHighlight: true,

    });

    $('#datepicker4').datepicker({

        weekStart: 1,

        daysOfWeekHighlighted: "6,0",

        autoclose: true,

        todayHighlight: true,

    });



 $('.totop').tottTop({

            scrollTop: 100

        });  





   $('a.mm-original-link').click( function(e) {e.preventDefault(); return false; } );


   









