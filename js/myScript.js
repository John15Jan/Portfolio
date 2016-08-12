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
	
	
	// Dynamically populate html card elements with JSON Data
	$.getJSON('js/portfolios.json', function(data){
		var output = "";
		var nextRowIndex = 0;
		for (var i = 0; i < data.portfolios.length; i++) {
			// Detect new row
			if (i == nextRowIndex) {
				nextRowIndex += 3;
				output += "<div class='row'>";
			}
			output += "<div class='col-sm-4'>" +
			"<div class='card card-inverse card-primary-grad margin-bottom30' id='" + data.portfolios[i].id + "'>" +
			"<img class='card-img-top img-fluid' src='" + data.portfolios[i].image + "' alt='" + data.portfolios[i].title + " Image'>";
			output += "<div class='card-block'>" + 
			"<h3 class='card-title'>" + data.portfolios[i].title + "</h3>";
			if (data.portfolios[i].hasOwnProperty("skills")) {
				output += "<p class='card-text'>";
				for (var j = 0; j < data.portfolios[i]["skills"].length; j++) {
					for (skill in data.portfolios[i]["skills"][j]) {
						if (!isNaN(+skill) && isFinite(skill)) {
							output += data.portfolios[i]["skills"][j][skill] + ", ";
						} else {
							output += "<img class='img-fluid icon-inline' src='" + data.portfolios[i]["skills"][j][skill] + "' alt='" + skill + " icon'>";
						}
					}
				}
				// Remove last two characters (", ") from output string 
				output = output.substring(0, output.length-2);
				output += "</p></div></div></div>";
				if (i == nextRowIndex-1) {
					output += "</div>";
				}
			}   
		}
		var update = document.getElementById('portfolios');
		update.innerHTML = output;
	}); 

	
	// jQuery binding events to dynamically loaded html elements
	// Change the mouse pointer style and card background color
	// when a user hovers over a card
	$('#portfolios').delegate('.card', 'mouseenter mouseleave', function(event) {
		if (event.type == 'mouseenter') {
			$(this).css('cursor', 'pointer');
			$(this).removeClass('card-primary-grad');
			$(this).addClass('primary-color-hover');
			$(this).addClass('card-border-hover');
		} else {
			$(this).css('cursor', 'default');
			$(this).removeClass('primary-color-hover');
			$(this).addClass('card-primary-grad');
			$(this).removeClass('card-border-hover');
		}
	});
 
	
	// #portfolios is present when the page loads
	// However, card elements inside of #portfolios are dynamic
	// so, cannot use $('#card-bc').click(function()
	
	// Open link in new window when a user clicks a card
	$('#portfolios').delegate('#card-bc', 'click', function(e) {
		window.open('http://wpbc.ABC.COM/', '_blank');
		if (e.preventDefault) {  	e.preventDefault();  }  
		e.returnValue = false;
	});
	$('#portfolios').delegate('#card-jh', 'click', function() {
		window.open('http://portfolio.ABC.COM/JobHunter/', '_blank');
		return false;
	});
	$('#portfolios').delegate('#card-sw', 'click', function() {
		window.open('http://portfolio.ABC.COM/SportsWarehouse/', '_blank');
		return false;
	});
	$('#portfolios').delegate('#card-ph', 'click', function() {
		window.open('http://portfolio.ABC.COM/', '_blank');
		return false;
	});
	$('#portfolios').delegate('#card-aa', 'click', function() {
		window.open('https://www.youtube.com/watch?v=aakp6iZ4qAk', '_blank');
		return false;
	});
	$('#portfolios').delegate('#card-vc', 'click', function() {
		window.open('https://www.youtube.com/watch?v=FcBo1bKC7rE', '_blank');
		return false;
	});
	$('#portfolios').delegate('#card-sb', 'click', function() {
		window.open('http://ABC.COM/static_bc/', '_blank');
		return false;
	});
	$('#portfolios').delegate('#card-mt', 'click', function() {
		window.open('http://JohnMTT.blogspot.com.au/', '_blank');
		return false;
	});
	$('#portfolios').delegate('#card-ar', 'click', function() {
		window.open('https://www.youtube.com/watch?v=z9y3NafcnPs', '_blank');
		return false;
	});
	$('#portfolios').delegate('#card-cw', 'click', function() {
		window.open('https://www.youtube.com/watch?v=GAJRiVW8TgU', '_blank');
		return false;
	});
	
	// Activate Scrollspy
	var topoffset = 0; //variable for menu height
	$('body').scrollspy({
		target: 'header .navbar',
		offset: topoffset
	});
	
	//  Adjust padding-top of first page
	//$('section#home').addClass('firstpage-padding');
	
	//Use smooth scrolling when clicking on navigation
	$('.navbar a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') 
			&& location.hostname === this.hostname) {
			
			// Remove query strings
			var clean_uri = location.protocol + "//" + location.host + location.pathname;
			window.history.replaceState({}, document.title, clean_uri);

			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top - topoffset + 2
					}, 500);
				return false;
			} //target.length
		} //click function
	}); //smooth scrolling
});