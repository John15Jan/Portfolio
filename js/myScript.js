$(function() {
	/* "use strict"; */
	// Embeded Google Map
	function init_map(){
		var myOptions = {zoom:14, center:new google.maps.LatLng(-33.7080101,151.0985389), mapTypeId: google.maps.MapTypeId.ROADMAP};
		map = new google.maps.Map(document.getElementById("map-container"), myOptions);
		marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(-33.7080101, 151.0985389)});
		infowindow = new google.maps.InfoWindow({content:"<b>ABC.COM</b><br/>107 Pacific Highway<br/>Hornsby NSW 2077 " });
		google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
		infowindow.open(map,marker);
	}
	google.maps.event.addDomListener(window, 'load', init_map);
	
	// Change the mouse pointer style and card background color
	// when a user hovers over a card
	$('.card').hover(
		function() {
			$(this).css('cursor', 'pointer');
			$(this).removeClass('card-primary-grad');
			$(this).addClass('primary-color-hover');
			$(this).addClass('card-border-hover');
		},
		function() {
			$(this).css('cursor', 'default');
			$(this).removeClass('primary-color-hover');
			$(this).addClass('card-primary-grad');
			$(this).removeClass('card-border-hover');
		}
	); 
	
	// Open link in new window when a user clicks a card
	$('#card-bc').click(function(e) {
		window.open('http://wpbc.ABC.COM/', '_blank');
		if (e.preventDefault) {  	e.preventDefault();  }  
		e.returnValue = false;
	});
	$('#card-jh').click(function() {
		window.open('http://portfolio.ABC.COM/JobHunter/', '_blank');
		return false;
	});
	$('#card-sw').click(function() {
		window.open('http://portfolio.ABC.COM/SportsWarehouse/', '_blank');
		return false;
	});
	$('#card-ph').click(function() {
		window.open('http://portfolio.ABC.COM/', '_blank');
		return false;
	});
	$('#card-aa').click(function() {
		window.open('https://www.youtube.com/watch?v=aakp6iZ4qAk', '_blank');
		return false;
	});
	$('#card-vc').click(function() {
		window.open('https://www.youtube.com/watch?v=FcBo1bKC7rE', '_blank');
		return false;
	});
	$('#card-sb').click(function() {
		window.open('http://ABC.COM/static_bc/', '_blank');
		return false;
	});
	$('#card-mt').click(function() {
		window.open('http://JohnMTT.blogspot.com.au/', '_blank');
		return false;
	});
	$('#card-ar').click(function() {
		window.open('https://www.youtube.com/watch?v=z9y3NafcnPs', '_blank');
		return false;
	});
	
	// Activate Scrollspy
	var topoffset = 55; //variable for menu height
	$('body').scrollspy({
		target: 'header .navbar',
		offset: topoffset
	});
	
	//  Adjust padding-top of first page
	$('section#home').addClass('firstpage-padding');
	
	//Use smooth scrolling when clicking on navigation
	$('.navbar a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') 
			&& location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({scrollTop: target.offset().top-topoffset+2}, 500);
				return false;
			} //target.length
		} //click function
	}); //smooth scrolling
});