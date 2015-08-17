jQuery( document ).ready(function( $ ) {

	//add tooltips
	$('[data-toggle="tooltip"]').tooltip();

	//background hides while srolling down
	window.onscroll = function () {
		document.getElementById('trans-bg').style.opacity =
		(window.pageYOffset * 0.001);
	}

});
