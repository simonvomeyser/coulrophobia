jQuery( document ).ready(function( $ ) {

	//add tooltips
	$('[data-toggle="tooltip"]').tooltip();

	//background hides while srolling down
	window.onscroll = function () {
		document.getElementById('trans-bg').style.opacity =
		(window.pageYOffset * 0.001);
	};

	$('img').imagesLoaded().progress(function() {
	    // All descendant images have loaded, now fade out (and image in).
		$('#bg-fade-in').animate({opacity: 0}, 1000);
	});


	//Toggeling of font awesome chevrons in accordeon
	$('#accordion').on('hide.bs.collapse', function (event) {
		$(event.target).closest('.panel').find('.fa-chevron-circle-down').removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-right');
	});
	$('#accordion').on('show.bs.collapse', function (event) {
		$(event.target).closest('.panel').find('.fa-chevron-circle-right').removeClass('fa-chevron-circle-right').addClass('fa-chevron-circle-down');
	});

});

