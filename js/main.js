jQuery(document).ready(function($){

	var windowWidth = $(window).width();
	
	$.fn.exists = function() {
		return this.length > 0;
	};

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
			});
		}
	});
	
	$('.mobile_menu_icon').click(function(e){
		e.preventDefault();
		$(this).toggleClass('open');
		$('.menu').toggleClass('open');
	});
});