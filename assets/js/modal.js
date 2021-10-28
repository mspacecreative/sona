(function( root, $, undefined ) {
	"use strict";

	$(function () {
		
		var
		modalOverlay = $('.modal'),
		closeButton = $('.close'),
		exitModal = closeButton.add(modalOverlay),
		body = $('body');
				 
		$(document).on('click', '.view-modal', function(e) {
		    e.preventDefault();
			
			var
			$feedModal = $('.modal'),
			data = {
			    'action': 'load_page_by_ajax',
			    'id': $(this).data('id'),
			    'security': sona.security
			};
				
			body.addClass('modal-is-open');
				
			$.post(sona.ajaxurl, data, function(response) {
		        response = JSON.parse(response);
		        
				if ( response.title && response.excerpt ) {
					$('#postModal .modal-body').html(
						'<h2 class="modal-title">' 
							+ response.title + 
						'</h2>'
						+ response.excerpt
					);
				}
		 
		        $('#postModal').fadeIn();
		    });
			
			// Listen for modal hide and popstate events.
			function startListening() {
				$feedModal.on('hide.bs.modal', onModalHide);
				$(window).on('popstate', onPopState);
			}
				
			// Stop listening for modal hide and popstate events.
			function stopListening() {
				$feedModal.off('hide.bs.modal', onModalHide);
				$(window).off('popstate', onPopState);
			}
				
			// Modal opens.
			// Add event listeners and push state.
			function onModalShow() {
				startListening();
			}
				
			// Modal hides.
			// Remove event listeners and go back.
			function onModalHide() {
				stopListening();
			}
				
			// Navigation occurs.
			// Remove event listeners and hide modal.
			function onPopState() {
				stopListening();
				$feedModal.modal('hide');
			}
				
			// Listen for when the modal shows.
			$feedModal.on('show.bs.modal', onModalShow);
		});
		
		exitModal.click(function() {
			body.removeClass('modal-is-open');
			modalOverlay.fadeOut();
		});
		
		$('.modal-content').click(function() {
			stopPropagation();
		});
		
		// ESCAPE KEY CLICK TO ESCAPE
		$(document).keyup(function(e) {
			if (e.key === "Escape") {
				
				// STOP VIDEO
				modalOverlay.find('iframe').attr('src', function ( i, val ) { return val; });
				
				// REMOVE BODY CLASS
				body.removeClass('modal-is-open');
				
				if ( !$('.modal-is-open').length ) {
					// CLOSE MODAL
					modalOverlay.fadeOut();
				}
			}
		});
		
	});

} ( this, jQuery ));