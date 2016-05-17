$(document).ready(function () {
	
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var headerHeight = $('.navbar').outerHeight();
	var landingHeight = $('.jumbotron').outerHeight();
	
	console.log(landingHeight);

	// paralax background effect
	$('section[data-type="background"]').each(function () {
		var bgObj = $(this);
		$(window).scroll(function () {
			var yPos = -($(window).scrollTop() / bgObj.data('speed'));
			var coordinates = '50% ' + yPos + 'px';

			bgObj.css({
				backgroundPosition: coordinates
			});
		});
	});

	$(window).resize(function() {
		headerHeight = $('.navbar-wrapper').outerHeight();
	});

	$(window).scroll(function (event) {
		var currentY = window.pageYOffset || $(window).scrollTop(),
			yLimit = landingHeight,
			target = $('.home .navbar-fixed-top');
		
		if (currentY > yLimit) {
			target.addClass('navbar--show');
		} else {
			target.removeClass('navbar--show');
		}
	});

});