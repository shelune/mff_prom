$(document).ready(function () {
	
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var headerHeight = $('.navbar').outerHeight();
	var landingHeight = $('.jumbotron').outerHeight();
	

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
		
		// change color of scroll arrow (funky AF)
		if (currentY > 110) {
			$('.scroll-trigger').addClass('inverse');
			changeArrDirection("up");
		} else {
			$('.scroll-trigger').removeClass('inverse');
			changeArrDirection("down");
		}
		
		if (currentY > 780) {
			$('.scroll-trigger').removeClass('inverse');
		}
		
		if (currentY > 1450) {
			$('.scroll-trigger').addClass('inverse');
		}
		
		if (currentY > 1900) {
			$('.scroll-trigger').removeClass('inverse');
		}
	});
	
	// change arrow direction of scroll arrow fixed bottom
	var changeArrDirection = function (direction) {
		if (direction === "up") {
			$('.scroll-trigger i').removeClass('fa-angle-down');
			$('.scroll-trigger i').addClass('fa-angle-up');
		} else {
			$('.scroll-trigger i').removeClass('fa-angle-up');
			$('.scroll-trigger i').addClass('fa-angle-down');
		}
	};
	
	$('.intro__last-year, .intro__this-year').addClass('viewport--hidden-left').viewportChecker({
		classToAddForFullView: 'viewport--show',
		classToRemove: 'viewport--hidden-left',
		repeat: true,
		offset: 250
	});
	
	$('.performer--old').addClass('viewport--hidden-right').viewportChecker({
		classToAddForFullView: 'viewport--show',
		classToRemove: 'viewport--hidden-right',
		repeat: true,
		offset: 250
	});

});