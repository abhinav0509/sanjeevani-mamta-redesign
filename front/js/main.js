(function ($) {
	"use strict";

			
    // Owl Carousel for Teachers Panel
    var maintheme_slid = $('.main_slider');
    maintheme_slid.owlCarousel({
        loop:true,
        margin:30,
        autoplay:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            992:{
                items:1
            }
        }
    });
    
    $('.mainslider_nav .testi_next').on('click', function() {
        maintheme_slid.trigger('next.owl.carousel');
    });
    
    $('.mainslider_nav .testi_prev').on('click', function() {
        maintheme_slid.trigger('prev.owl.carousel');
    });
    
    // Owl Carousel for Clinical Service
     var latservice_slid = $('.clinicalServices_inner');
    latservice_slid.owlCarousel({
        loop:true,
        margin:30,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            1200:{
                items:4
            }
        }
    });
    
    $('.clinicalServices_nav .testi_next').on('click', function() {
        latservice_slid.trigger('next.owl.carousel');
    });
    
    $('.clinicalServices_nav .testi_prev').on('click', function() {
        latservice_slid.trigger('prev.owl.carousel');
    });
    
    // Owl Carousel for Latest Service
    var tab_slid = $('.tab-pane');
    tab_slid.owlCarousel({
        loop:true,
        margin:30,
        autoplay:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:3
            },
            992:{
                items:3
            }
        }
    });
    
    $('.tab_area_nav .testi_next').on('click', function() {
        tab_slid.trigger('next.owl.carousel');
    });
    
    $('.tab_area_nav .testi_prev').on('click', function() {
        tab_slid.trigger('prev.owl.carousel');
    });

    
     // Owl Carousel for patients part
    var patient_slid = $('#patient_slide, #patient_feedback');
    patient_slid.owlCarousel({
        loop:true,
        margin:30,
        autoplay:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:1
            },
            992:{
                items:1
            }
        }
    });
    
    $('.patients_area_nav .testi_next').on('click', function() {
        patient_slid.trigger('next.owl.carousel');
    });
    
    $('.patients_area_nav .testi_prev').on('click', function() {
        patient_slid.trigger('prev.owl.carousel');
    });
   
    // Jquery Parallax
    $('.patients_part').parallax('50%', 0.2);
    
    // Jquery counterUp
    $('.counter').counterUp({
        time: 3000
    });
    
    var $topsidebar_box = $('.topsider_box');
    var $topsidebar_box_icon = $('.topsider_box .iconn');
    $topsidebar_box.on('mouseover', function(){
        $topsidebar_box.removeClass('active');
        $topsidebar_box_icon.removeClass('active');
		$(this).children('.iconn').addClass('active');
        $(this).addClass('active');        		
		$(this).children('.iconn').find('i').css({"transition": "0.9s", "transform": "rotateY(180deg)", "color": "#3A8FE4", "font-weight":"600"}); 
				
    });
    $topsidebar_box.on('mouseleave', function(){
        $topsidebar_box.removeClass('active');
        $topsidebar_box_icon.removeClass('active');
		$topsidebar_box.children('.iconn').find('i').removeAttr('style');
        //$('.topsidebar_wrapper > div:nth-child(2n) .topsider_box, .topsidebar_wrapper > div:nth-child(2n) .topsider_box i').addClass('active');//
    });
    
    // jQuery MixItUp For All work
    $('.all_doctor_item').mixItUp(); 
    $('.all_doctor_item').mixItUp(); 
    
    // jQuery Venobox
    $('a.veno').venobox({
        numeratio: true,
        infinigall: true 
    });
    
    //for geting map side content height
    var ms_height = $('.map_side').height();
    
    // for set map parent div height as like its child size;
    $('div.contact_map').css('height', ms_height + 'px');
    var full_width = $(window).width();
    if(full_width < 768){
        $('div.contact_map').css('height', ms_height + 'px');
    }
    
    // Owl Carousel for about us
    var about_slid = $('.about_slider');
    about_slid.owlCarousel({
        loop:true,
        margin:30,
        autoplay:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            992:{
                items:1
            }
        }
    });
    
    $('.abouslider_nav .testi_next').on('click', function() {
        about_slid.trigger('next.owl.carousel');
    });
    
    $('.abouslider_nav .testi_prev').on('click', function() {
        about_slid.trigger('prev.owl.carousel');
    });
    
    // mobile Menu area
	$('nav.mb_menu').meanmenu({
		meanScreenWidth: '767'
	});


	$(window).load(function(){
		$('.scroll_top').on('click', function () {
	        $('html, body').animate({
	            scrollTop: 0
	        }, 4000);
	        return false;
	    });
	    
	    $('body, html').removeClass('fix');
	    $("#preloader").fadeOut(500);
	    
        // tab-pane item height
        var tabpane_height = $('.tab-pane').height();
        $('.tab-content').css('height', tabpane_height);
        
	});


}(jQuery));	;