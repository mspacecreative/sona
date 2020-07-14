(function ($) {
		
	// SMOOTH SCROLL
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top - 50
				}, 1000);
			    return false;
			}
		}
	});
		
	// SOCIAL MEDIA WINDOW
	$('.hamburger').click(function() {
		$(this).toggleClass('is-active');
		$(this).parent().next().fadeToggle();
	});
	
	// CHECK IF ABSOLUTE HEADING IS VISIBLE
	var absoluteHeading = $('.absoluteHeading');
	if ( absoluteHeading.length ) {
		absoluteHeading.parent().prev().css({
			'padding-bottom' : 'calc(5% + 30px)'
		});
	}
	
	// TOUCH HOVER FOR DESKTOP MENU
	$('.desktop-nav-menu .menu-item-has-children').on("touchstart", function (e) {
	'use strict'; //satisfy code inspectors
	var link = $(this); //preselect the link
	if (link.hasClass('hover')) {
	    return true;
	 } 
	else {
	   link.addClass('hover');
	   $('.desktop-nav-menu > ul > li').not(this).removeClass('hover');
	   e.preventDefault();
	   return false; //extra, and to make sure the function has consistent return points
	  }
	});
	
	// TEAM MEMBERS
	$('.team-profile, .team-bio-inner .fa').click(function () {
		$(this).next('.team-bio-container').toggleClass('show');
	});
	$('.team-bio-inner .desktop').click(function () {
		$(this).parent().parent().toggleClass('show');
	});
	
	// ADD SCROLL CLASS TO HEADER ON SCROLL
	$(document).scroll(function() {
	  var y = $(this).scrollTop();
	  if (y > 200) {
	    $('header').addClass('scroll');
	  } else {
	    $('header').removeClass('scroll');
	  }
	});
	
})(jQuery);
