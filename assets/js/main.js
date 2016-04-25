$(function() {

	var window = $(window);

	// paralax background effect
	$('section[data-type="background"]').each(function () {
		var bgObj = $(this);
		window.scroll(function () {
			var yPos = -(window.scrollTop() / bgObject.data('speed'));
			var coordinates = '50% ' + yPos + 'px';

			bgObj.css({
				backgroundPosition: coordinates
			});
		});
	});
})