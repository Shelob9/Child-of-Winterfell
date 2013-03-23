jQuery(document).ready(function($) {
	

		/* This is basic - uses default settings */
	
		$("a#single_image").fancybox();
	
		/* Using custom settings */
	
		$("a#inline").fancybox({
			'hideOnContentClick': true
		});

		/* Apply fancybox to multiple items */
	
		$("a.group").fancybox({
			'transitionIn'	:	'fade',
			'transitionOut'	:	'fade',
			'speedIn'		:	2, 
			'speedOut'		:	2, 
			'overlayShow'	:	true
		});
	

});