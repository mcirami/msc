jQuery(document).ready(function($){

/*	var localDev = true;

	if(localDev == true) {
		loadReload();
	}

	var mySwiper = new Swiper ('.swiper-container', {
	    mode: 'horizontal',
	    loop: true,
	    calculateHeight: true,
	    roundLength: true,
	    pagination: '.swiper-pagination',
	    paginationClickable: true,
	    autoplay: 5000,
	    preloadImages: false,
	    lazyLoading: true,
	    lazyLoadingOnTransitionStart: true,
	    nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        effect: 'cube',
        cube: {
	        slideShadows: false,
			shadow: false,
        }
    });
	
	var element = $('.bottom_bar');
*/
	var windowWidth = $(window).width();
	
	$.fn.exists = function() {
		return this.length > 0;
	}
/*
	if (element.length) {
		
		function isScrolledIntoView(element) {
			
			if (windowWidth > 900) {
				return $(element).offset().top - $(window).scrollTop() < $(element).height() + 200;
			} else if (windowWidth < 900 && windowWidth > 768) {
				return $(element).offset().top - $(window).scrollTop() < $(element).height() + 400;
			} else if (windowWidth < 769 && windowWidth > 550) {
				return $(element).offset().top - $(window).scrollTop() < $(element).height() + 600;
			} else if (windowWidth < 550) {
				return $(element).offset().top - $(window).scrollTop() < $(element).height() + 800;
			}
				
		}
	}
*/	
    var logoWidth = $('.logo_wrap').css('width');
    logoWidth = logoWidth.replace(/\D/g,'');
	
	(function(){

	  var parallax = document.querySelectorAll(".top_section"),
	      speed = 0.5;
	
	  window.onscroll = function(){
	    [].slice.call(parallax).forEach(function(el,i){
	
	      var windowYOffset = window.pageYOffset,
	          elBackgrounPos = "0 " + (windowYOffset * speed) + "px";
	      
	      el.style.backgroundPosition = elBackgrounPos;
	
	    });
	  };
	
	})();
	
    $(window).scroll(function(event) {
		var scrolledY = $(window).scrollTop();
		//console.log(scrolledY);
		
	  	//$('.top_section').css('background-position', 'left ' + ((scrolledY)) + 'px');
	  	
	  	$('.top_fade_title').css("opacity", 1 - scrolledY/140);
	  	$('.top_fade_title_single').css("opacity", 1 - scrolledY/220);
	  	$('.top_fade_sub').css("opacity", 1 - scrolledY/405);
	  	
	  	$('.slide_up_title').css("top", 0 - scrolledY/2);
	  	$('.slide_up_sub').css("top", 0 - scrolledY/6);
	  	$('.slide_down_sub').css("top", 0 + scrolledY/1.5);
	  	
	  	$('.top_fade_button').css("opacity", 1 - scrolledY/180);
	  	$('.slide_down').css("top", 0 + scrolledY/.89);


	  	/*
	  	if (element.length) {
		  	if (isScrolledIntoView(element)) {
			  	$('.animate_top').addClass('fade_in_down');
				$('.animate_left').addClass('fade_in_left');
				$('.animate_bottom').addClass('fade_in_up');
		  	}
	  	}
	  	*/
	  	//var distance = $('.bottom_bar').offset().top - scrolledY;
	  	/*
	  	if (windowWidth > 768) {
		  	
		  	$('.middle_fade_title').css("opacity", 1 - (scrolledY-1625)/100);
		  	$('.middle_fade_sub').css("opacity", 1 - (scrolledY-1650)/150);
		  	$('.middle_fade_button').css("opacity", 1 - (scrolledY-1700)/250);

		  	if (scrolledY > 1550) {
			  	$('.middle_slide_up').css("top", 0 - (scrolledY-1550)/2);
			  	$('.middle_slide_up_sub').css("top", 0 - (scrolledY-1550)/6);
			  	$('.middle_slide_down').css("top", 0 + (scrolledY-1550)/2);
		  	} else {
			  	$('.middle_slide_up').css("top", 0);
			  	$('.middle_slide_up_sub').css("top", 0);
		  	}
		  	
	  	} else {
		  	
		  	$('.middle_fade_title').css("opacity", 1 - (scrolledY-2300)/100);
		  	$('.middle_fade_sub').css("opacity", 1 - (scrolledY-2300)/125);
		  	$('.middle_fade_button').css("opacity", 1 - (scrolledY-2300)/200);
		  	
		  	if (scrolledY > 2300) {
			  	$('.middle_slide_up').css("top", 0 - (scrolledY-2300)/2.5);
			  	$('.middle_slide_up_sub').css("top", 0 - (scrolledY-2300)/3.5);
			  	$('.middle_slide_down').css("top", 0 + (scrolledY-2300)/3);
		  	} else {
			  	$('.middle_slide_up').css("top", 0);
			  	$('.middle_slide_up_sub').css("top", 0);
		  	}
	  	}
	  	*/
	  	
	  	if (scrolledY > 40) {
		  	
			//$('.logo_wrap').css('width', (logoWidth - scrolledY) + 'px');
			$('.logo_wrap, #global_header, .menu').addClass('scroll');
	  	} else {
		  	$('.logo_wrap, #global_header, .menu').removeClass('scroll');
	  	}

		
	});
	
	$(window).on('resize', function(){
		
		if ($(window).width() < 769) {
			//$('.logo_wrap').css('width', 125 + 'px');
			$('.logo_wrap').removeClass('scroll');
		/*	
			 $(window).scroll(function() {
			 	var scrolledY = $(window).scrollTop();
			 
				$('.middle_fade_title').css("opacity", 1 - (scrolledY-2400)/70);
			  	$('.middle_fade_sub').css("opacity", 1 - (scrolledY-2400)/100);
			  	$('.middle_fade_button').css("opacity", 1 - (scrolledY-2400)/200);
			  	
			  	if (scrolledY > 2400) {
				  	$('.middle_slide_up').css("top", 0 - (scrolledY-2400)/2);
				  	$('.middle_slide_up_sub').css("top", 0 - (scrolledY-2400)/3);
				  	$('.middle_slide_down').css("top", 0 + (scrolledY-2400)/3);
			  	} else {
				  	$('.middle_slide_up').css("top", 0);
				  	$('.middle_slide_up_sub').css("top", 0);
				  	$('.middle_fade_button').css("opacity", 1);
				  	$('.middle_slide_down').css("top", 0);
			  	}
			});
			*/
		} else {
			
			if ($(window).scrollTop() > 40) {
				//$('.logo_wrap').css('width', 143 + 'px');
				$('.logo_wrap').addClass('scroll');
	  		} else {
		  		//$('.logo_wrap').css('width', 175 + 'px');
		  		$('.logo_wrap').removeClass('scroll');
	  		}
	  		
	  		$(window).scroll(function() {
		  		var scrolledY = $(window).scrollTop();
		  	/*	
		  		$('.middle_fade_title').css("opacity", 1 - (scrolledY-1700)/125);
			  	$('.middle_fade_sub').css("opacity", 1 - (scrolledY-1700)/200);
			  	$('.middle_fade_button').css("opacity", 1 - (scrolledY-1700)/400);
	
			  	if (scrolledY > 1700) {
				  	$('.middle_slide_up').css("top", 0 - (scrolledY-1700)/2);
				  	$('.middle_slide_up_sub').css("top", 0 - (scrolledY-1700)/3);
				  	$('.middle_slide_down').css("top", 0 + (scrolledY-1700)/3);
			  	} else {
				  	$('.middle_slide_up').css("top", 0);
				  	$('.middle_slide_up_sub').css("top", 0);
				  	$('.middle_fade_button').css("opacity", 1);
				  	$('.middle_slide_down').css("top", 0);
			  	}
			  	*/
			});
		}
	});
	
	$('.mobile_menu_icon').click(function(e){
		e.preventDefault();
		$(this).toggleClass('open');
		$('.menu').toggleClass('open');
		//$('body').toggleClass('fixed');
	});
	
	$(".fancybox").click(function(e){
		e.preventDefault();
	});
	
	$(".fancybox").fancybox({
		autoPlay: true,
		playSpeed: 4000
	});
	
	
});