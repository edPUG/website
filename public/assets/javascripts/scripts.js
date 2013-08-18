
$(document).ready(function(){

	var meetup = $('#meetup > div'),
		expect = $('#expect > div'),
		contact = $('#contact > div'),
		navHeight,
		bottom,
		win;

		smoothScroll();
		scrollFade();

});

//smooth scrolling
function smoothScroll() {

	$('.nav a, a.brand').click(function(){

		navHeight = $('header').height();

		

		//check if on mobile and adjust offset of scroll
		if (Modernizr.mq('only screen and (min-width: 970px)')) {

			$('html, body').animate({		  
				scrollTop: $( $.attr(this, 'href') ).offset().top - navHeight
			}, 500);

		} else {

			$('html, body').animate({
			    scrollTop: $( $.attr(this, 'href') ).offset().top
			}, 500);

		}

		return false;
	});
}

//fade in elements as they come into view
function scrollFade() {

	$(window).scroll( function(){

		$('.content-row').each( function(i){
	            
	        bottom = $(this).position().top;
	        win = $(window).scrollTop() + $(window).height();
	            
	        // If the object is visible in the window, fade it it
	        if ( win > bottom ) {

	            $(this).find('> div').animate({'opacity':'1'},1000);
	            $(this).find('.clock-arm').addClass('animate');
	        }
	            
	    }); 

	});


}
