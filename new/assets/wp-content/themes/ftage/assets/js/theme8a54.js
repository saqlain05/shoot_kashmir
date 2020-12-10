(function ($) {

"use strict";

/*------ Our Team Slick Slider ------*/
   $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode: true,
    arrows: true,
    centerPadding: '0px',
    focusOnSelect: true,
    prevArrow: '<div class="slick-prev"><i class="icofont icofont-long-arrow-left" aria-hidden="true"></i></div>',
      nextArrow: '<div class="slick-next"><i class="icofont icofont-long-arrow-right" aria-hidden="true"></i></div>'
  });


/*--
    Magnific Popup
-----------------------------------*/
/*-- Video --*/

var videoPopup = $('.video-popup');

videoPopup.magnificPopup({

    type: 'iframe',

    mainClass: 'mfp-fade',

    removalDelay: 160,

    preloader: false,

    zoom: {

        enabled: true,

    }

});

	/*-- Hero Slider -- */	

	$('.hero-slider').slick({

		arrows: false,

		autoplay: false,

		dots: true,

		prevArrow: '<i class="icofont icofont-simple-left slider_nev_left"></i>',

		nextArrow: '<i class="icofont icofont-simple-right slider_nev_right"></i>',

		fade: true,

		infinite: true,

		slidesToShow: 1,

		responsive: [

			{

			  breakpoint: 600,

			  settings: {

				dots: true,

				autoplay: true,

				autoplaySpeed: 7000,

			  }

			},

		]

	});

	// Gallery Isotope

	$('.new').imagesLoaded( function() {

		if($.fn.isotope){

			var $gallery = $('.new');

			$gallery.isotope({

				itemSelector: '.grid-item',

				filter: '*',

				resizesContainer: true,

				layoutMode: 'masonry',

				transitionDuration: '0.8s'			

			});


			$('.filter_menu li').on('click', function(){

				$('.filter_menu li').removeClass('current_menu_item');

				$(this).addClass('current_menu_item');

				var selector = $(this).attr('data-filter');

				$gallery.isotope({

					filter: selector,

				});

			});

		};

	});			

// Testimonila carousel
$('.client-speech-carousel').owlCarousel({
    nav:true,
    animateIn: 'flipInX',
    loop: true,
  navText:["<i class='icofont icofont-long-arrow-left'></i>","<i class='icofont icofont-long-arrow-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        992:{
            items:1
        },    
        1199:{
            items:1
        },    
        1920:{
            items:1
        }
    }
})  
	/* blog carousel */ 

    $('.blog-carousel').owlCarousel({

      autoPlay: false, 

      items : 3,

      nav: false,

      dots: true,

      margin: 0,

      responsive:{

          0:{

              items:1

          },

          479:{

              items:1

          },

          767:{

              items:2

          },

          980:{

              items:2

          },

          1000:{

              items:3

          }

      }

    });	
	/*-- Venubox -- */	
	$('.venobox').venobox({    

		border: '10px',          

		titleattr: 'data-title',  

		numeratio: true,           

		infinigall: true      

	});

	/*------------------------------
		1 - counter
	------------------------------*/	
    $('.counter').counterUp({

        delay: 50,

        time: 3000

    });

/*--------------------------
    ScrollUp
---------------------------- */	

	$.scrollUp({

        scrollText: '<i class="fa fa-angle-up"></i>',

        easingType: 'linear',

        scrollSpeed: 900,

        animation: 'fade'

    });

/*--------------------------

Mobile Menu 

---------------------------- */ 

if ( $(".nav-mobile ul.menu li").has("ul") ) {

    $(".nav-mobile ul.menu li ul").parent("li").prepend('<span class="menu-hitarea"><i class="fa fa-angle-down"></i></span>');

};

$(".menu-hitarea").on("click", function(){

  $(this).siblings("ul").slideToggle("slow");

  if ( $(this).find("i").hasClass('fa-angle-right')){

    $(this).find("i").removeClass('fa-angle-right').addClass('fa-angle-down');

  }else{

    $(this).find("i").removeClass('fa-angle-down').addClass('fa-angle-right');

  }

});

/*--------------------------
    WOW
---------------------------- */		
new WOW().init();
// Blog Masonry

 $('.blog_masonry').imagesLoaded( function() {

  if($.fn.isotope){

   var $gallery = $('.blog_masonry');

   $gallery.isotope({

    itemSelector: '.grid-item',

    filter: '*',

    resizesContainer: true,

    layoutMode: 'masonry',

    transitionDuration: '0.8s'   

   });

  };

 });


})(jQuery);	