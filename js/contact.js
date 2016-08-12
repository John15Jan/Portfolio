function show_results() {
	// Remove query strings
	var clean_uri = location.protocol + "//" + location.host + location.pathname;
	window.history.replaceState({}, document.title, clean_uri);
	// Jump to contact page
	location.hash = '#contact-results';
	//$('.navbar a[href*=#contact]:not([href=#])').addClass('active').trigger('click');
}// JavaScript Document