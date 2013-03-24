(function($) {
    $(window).load(function() {
        $('.flexslider').flexslider({
        		slideshow: false,
        		controlNav: "thumbnails",
	            animation: 'slide',
				directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
		    	controlsContainer: '.flex-nav'
		    	
	    });
    });
})(jQuery)