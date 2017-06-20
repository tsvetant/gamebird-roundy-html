
$(function() {

	// Tooltips
	$('[data-toggle="tooltip"]').tooltip({
		trigger: 'hover'
	})

	// Navigation
	$('nav#menu').mmenu({
		extensions	: [ 'effect-slide', 'pageshadow', "iconbar" ],
		header		: true,
		searchfield	: true,
		counters	: true,
		offCanvas	: false,
		footer		: {
				add     	: false,
				content   	: '<a href="mmenu.frebsite.nl">Visit website &rsaquo;</a>'
		}
	});

	// Carousels
	$(".owl-carousel").owlCarousel({
	    loop: true,
	    margin: 10,
	    nav: false,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:5
	        }
	    }
 	});



});