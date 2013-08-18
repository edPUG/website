
$(document).ready(function(){

	var meetup = $('#meetup > div'),
		expect = $('#expect > div'),
		contact = $('#contact > div'),
		navHeight,
		bottom,
		win;

	$('.requires-javascript').hide();

	smoothScroll();
	scrollFade();
	initContactForm();

});

function initContactForm() {
	
	var $form = $('#contact-form-ajax');
	$form.show();
	
	$form.submit(function(event) {
		
		// show spinner
		var $spinner       = $('#contact-form-submitting');
		var $submit_button = $('button[type=submit]', $form);
		var $success_div   = $('#contact-form-success');
		
		$spinner.removeClass('hide');
		$submit_button.attr('disabled','disabled');
		$success_div.hide();
		
		event.preventDefault();
		
		var submit_url = $form.data('action');
		
		var posting = $.post(submit_url, $form.serializeArray() );
		
		/* Put the results in a div */
		posting.done(function(data) {
			
			$success_div.html(data.message);
			$success_div.show();
			
		});
		
		posting.fail(function(data) {
			alert('There was an error submitting the form, please try again');
		});
		
		posting.always(function(data) {
			$spinner.addClass('hide');
			$submit_button.removeAttr('disabled');
		});
				 
	} );
		
	
}

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
