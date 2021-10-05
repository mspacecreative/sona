(function ($) {
		
	// KEYBOARD ACCESSIBLE SUB MENU ITEMS
	$(function() {
	  $('.menu-item-has-children > a').focus( function () {
	  	$(this).siblings('.sub-menu').addClass('focused');
	  }).blur(function(){
	  	$(this).siblings('li ul').removeClass('focused');
	  });
	// submenu
	  $('.sub-menu a').focus( function () {
	    $(this).parents('.sub-menu').addClass('focused');
	  }).blur(function(){
	    $(this).parents('.sub-menu').removeClass('focused');
	  });
	});
	
	// CHANGE MOBILE NAV SETTINGS
	if ( $('.sub-menu').css('display') == 'none' ) {
		$('.mobile-menu').find('.menu-item-has-children').prepend('<span class="subMenuToggle"><i class="fa fa-angle-down"></i></span>');
	}
	
	$('.subMenuToggle').click(function() {
		$(this).siblings('.sub-menu').slideToggle();
		$(this).toggleClass('rotate');
	});
	
	// SMOOTH SCROLL
	$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 500);
			    return false;
			}
		}
	});
	
	// REMOVE OUTLINE ON CLICKABLE ITEMS WHEN USING MOUSE
	document.body.addEventListener('mousedown', function() {
		document.body.classList.add('using-mouse');
			document.body.classList.remove('using-keyboard');
	});
	
	// Re-enable focus styling when Tab is pressed
	document.body.addEventListener('keydown', function(event) {
		if (event.keyCode === 9) {
			document.body.classList.remove('using-mouse');
			document.body.classList.add('using-keyboard');
		}
	});
	
	var hasFocus = $(':focus');
	
	function headerHeightCalc() {
		var headerHeight = $('header').outerHeight();
		$('.skip-links').css('top', headerHeight);
	}
	
	// bind a click event to the 'skip' link
    $(".skip-to-link").click(function(event) {

        // strip the leading hash and declare
        // the content we're skipping to
        var skipTo = "#" + this.href.split('#')[1];

        // Setting 'tabindex' to -1 takes an element out of normal 
        // tab flow but allows it to be focused via javascript
        $(skipTo).attr('tabindex',  -1).on('blur focusout', function() {

            // when focus leaves this element, 
            // remove the tabindex attribute
            $(this).removeAttr('tabindex');
		}).focus(); // focus on the content container
	});
		
	// SOCIAL MEDIA WINDOW
	$('.hamburger').click(function() {
		$(this).toggleClass('is-active');
		//$(this).parent().next().fadeToggle();
		
		// FIXED CONTENT WHEN SOCIAL WINDOW IS OPEN
		$('html').toggleClass('fixed search-is-visible');
	});
	
	$('.social-window > a[href*="#"]').click(function() {
		$('html').toggleClass('fixed search-is-visible');
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
	$('.team-profile > a[href*="#"]').each(function() {
		$(this).click(function(e) {
			e.preventDefault();
			$(this).parent().next().fadeIn();
		});
	});
	$('.team-bio-inner .desktop').click(function() {
		$(this).parent().parent().fadeOut();
	});
	$('.close-button').click(function() {
		$(this).parent().parent().parent().children('.bioContainerUnderlay').fadeOut();
	});
	$(document).keyup(function(e) {
	     if (e.key === "Escape") { // escape key maps to keycode `27`
	        $('.bioContainerUnderlay, .team-bio-container').fadeOut();
			$('.hamburger').removeClass('is-active');
			//$('.social-window').fadeOut();
			$('body').removeClass('showForm');
			$('html').removeClass('fixed search-is-visible');
	    }
	});
	$('.team-profile').each(function() {
		$(this).click(function() {
			if ( $(this).next('.team-bio-container').length ) {
				$(this).parent().children('.bioContainerUnderlay').fadeIn();
				$(this).next().fadeIn();
			}
		});
	});
	$('.bioContainerUnderlay').on('click', function() {
		$(this).fadeOut();
		$(this).siblings('.team-bio-container').fadeOut();
	});
	
	// ADD SCROLL CLASS TO HEADER ON SCROLL
	$(document).scroll(function() {
		var y = $(this).scrollTop();
	  	if (y > 200) {
		    $('header').addClass('scroll');
		} else {
		    $('header').removeClass('scroll');
		}
		
		// FADE OUT SUB MENU
		$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function() {
			$(this).parent().parent().removeClass('focused');
		});
	});
	
	// DOCUMENT READY
	$(document).ready(function() {
		//INITIALIZE AOS
		AOS.init();
		
		// BREAKING NEWS BANNER SHOWING
		if ( $('.cookieBanner').css('display') == 'none' ) {
			$('body').addClass('hideBanner');
		}
		
		// SLICK SLIDER
		$('.carousel').slick({
			dots: true,
			slidesToShow: 3,
			slidesToScroll: 3,
		});
	});
	
	// ACCORDION FUNCTIONALITY
	$('.tabRow > a').click(function(e) {
		e.preventDefault();
		$(this).next().slideToggle();
		$(this).toggleClass('rotate');
	});
	
	// BREAKING NEWS BANNER SHOWING
	$('.closeButton, .learnMore').click(function() {
		$(this).parent().parent().siblings('.wrap').css('margin-top', '0');
		$(this).parent().parent().siblings('header').css('top', '0');
	});
	
	// TARGET SINGLE ROWS
	$('.team-container').each(function() {
		var teamContainerChildren = $('.team-container > .team-profile').length;
		if ( teamContainerChildren < 4 ) {
			teamContainerChildren.css('padding-bottom', '0');
		}
	});
	
	// BLOCK CLICKING ON NAV ITEMS WITH HASH
	$('nav li a[href^="#"]').on("click", function(e) {
		e.preventDefault();
	});
	
	$('nav li a[href^="#"]').css('cursor', 'default');
	
	// REMOVE P TAG BOTTOM SPACING FROM BLOG / NEWS GRID
	$('.boxed-inner').each(function() {
		$(this).find('.view-article-container').prev('p').css('margin-bottom', '0');
	});
	  
	// HIDE/SHOW HEADER ON SCROLL
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('header').outerHeight();
	
	$(window).scroll(function(event){
	    didScroll = true;
	});
	
	setInterval(function() {
	    if (didScroll) {
	        hasScrolled();
	        didScroll = false;
	    }
	}, 250);
	
	function hasScrolled() {
	    var st = $(this).scrollTop();
	    
	    // Make sure they scroll more than delta
	    if(Math.abs(lastScrollTop - st) <= delta)
	        return;
	    
	    // If they scrolled down and are past the navbar, add class .nav-up.
	    // This is necessary so you never see what is "behind" the navbar.
	    if (st > lastScrollTop && st > navbarHeight){
	        // Scroll Down
	        $('header, .hamburger').removeClass('nav-down').addClass('nav-up');
	    } else {
	        // Scroll Up
	        if(st + $(window).height() < $(document).height()) {
	            $('header, .hamburger').removeClass('nav-up').addClass('nav-down');
	        }
	    }
	    
	    lastScrollTop = st;
	}
	
	// NEWSLETTER MODAL
	$('.newsletterToggle').click(function(e) {
		e.preventDefault();
		$('body').toggleClass('showForm');
	});
	
	$('.newsletterFormClose').click(function(e) {
		e.preventDefault();
		$('body').toggleClass('showForm');
	});
	
})(jQuery);
