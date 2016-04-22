jQuery( document ).ready(function( $ ) {

	//add tooltips
	$('[data-toggle="tooltip"]').tooltip();

	//background hides while srolling down
	window.onscroll = function () {
		$('#trans-bg').css({'opacity': Math.abs(Math.sin(window.pageYOffset * 0.001))});
	};

	imagesLoaded( document.querySelector('body'), function( instance ) {
	 	$('.fadeImageIn').imagesLoaded().animate({opacity: 1}, 2500);
		$('#bg-fade-in').animate({opacity: 0}, 1000);
	});
	//Toggeling of font awesome chevrons in accordeon
	$('#accordion').on('hide.bs.collapse', function (event) {
		$(event.target).closest('.panel').find('.fa-chevron-circle-down').removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-right');
	});
	$('#accordion').on('show.bs.collapse', function (event) {
		$(event.target).closest('.panel').find('.fa-chevron-circle-right').removeClass('fa-chevron-circle-right').addClass('fa-chevron-circle-down');
	});

	lightbox.option({
	   'showImageNumberLabel': false
	});
});

