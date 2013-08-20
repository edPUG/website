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
	initPopups();
	initOutboundLinkTracking();
	initExtraGaTracking();

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
			ga('send', 'event', 'Contact', 'Sent');
			$success_div.html(data.message);
			$success_div.show();
			
		});
		
		posting.fail(function(data) {
			ga('send', 'event', 'Contact', 'Failed');
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
    scroll($.attr(this, 'href'));
		return false;
	});
}

function scroll(href) {

		navHeight = $('header').height();

		if($('html').hasClass('ie-sucks')) {
			navHeight = navHeight + 100;
		}

		//check if on mobile and adjust offset of scroll
		if (Modernizr.mq('only screen and (min-width: 970px)')) {

			$('html, body').animate({		  
				scrollTop: $( href ).offset().top - navHeight
			}, 500);

		} else {

			$('html, body').animate({
			    scrollTop: $( href ).offset().top
			}, 500);

		}
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

function initPopups() {
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
	
	
}

// Outbound Link Tracking with Google Analytics
// Wallace Sidhrée - http://dreamyguy.com/
// Requires jQuery 1.7 or higher (use .live if using a lower version)
function initOutboundLinkTracking() {
    $("a").on('click',function(e){
        var $a = $(this);
		var url = $a.attr("href");
        // Console logs shows the domain name of the link being clicked and the current window
        // console.log('e.currentTarget.host: ' + e.currentTarget.host);
        // console.log('window.location.host: ' + window.location.host);
        // If the domains names are different, it assumes it is an external link
        // Be careful with this if you use subdomains
        if (e.currentTarget.host != window.location.host && !$a.hasClass('popup-gmaps')) {
            // console.log('external link click');
            // Outbound link! Fires the Google tracker code.
			
			// is this a book button? which one? check the section it is in
			if ($a.hasClass('book-btn')) {
				var section_id = $a.closest('section').attr('id');
				ga('send', 'event', 'Book button', section_id ? 'from section ' + section_id : 'from unknown section');
			} else {
				ga('send', 'event', 'Outbound link', e.currentTarget.host.replace(':80',''));
			}
            // Checks to see if the ctrl or command key is held down
            // which could indicate the link is being opened in a new tab
            if (e.metaKey || e.ctrlKey || $a.attr('target') == '_blank') {
                // console.log('ctrl or meta key pressed');
                var newtab = true;
            }
            // If it is not a new tab, we need to delay the loading
            // of the new link for a just a second in order to give the
            // Google track event time to fully fire
            if (!newtab) {
                // console.log('default prevented');
                e.preventDefault();
                // console.log('loading link after brief timeout');
                setTimeout('document.location = "' + url + '"', 100);
            }
        } else {
            // console.log('internal link click');
			// special link? e.g. map click
			if ($a.hasClass('map-update')) {
				var map_location = $a.attr('id');
				ga('send', 'pageview', '/home/map/' + map_location);	
			}
        }
        
    });
}

function initExtraGaTracking() {
	
	// track the soft nav lings as page views
	$('.navbar a').filter(function(index) { return $(this).attr('href').indexOf('#') > -1 }).click(function() {
		var link_parts = $(this).attr('href').split('#');
		ga('send', 'pageview', '/home/' + link_parts[1]);	
	});

}
