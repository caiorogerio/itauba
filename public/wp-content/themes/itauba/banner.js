(function() {
	var items = jQuery('#home-banner > ol > li');
	
	window.setInterval(function() {
		var current = items.filter('.show'),
		next = current.next();
		
		if(!next.length) {
			next = items.filter(':first');
		}
		
		current.removeClass('show');
		next.addClass('show');
	}, 10000);
	
	items.filter(':first').addClass('show');
})();