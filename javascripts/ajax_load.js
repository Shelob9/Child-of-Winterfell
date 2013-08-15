jQuery(document).ready(function($) {
    
	// Establish Variables
	var
		History = window.History, // Note: Using a capital H instead of a lower h
		State = History.getState(),
		$log = $('#log');
	
	// If the link goes to somewhere else within the same domain, trigger the pushstate
	$('#access a').on('click', function(e) {
		e.preventDefault();
		var path = $(this).attr('href');
		var title = $(this).text();
		History.pushState('ajax',title,path);
	});
		
	// Bind to state change
	// When the statechange happens, load the appropriate url via ajax
	History.Adapter.bind(window,'statechange',function() { // Note: Using statechange instead of popstate
		load_site_ajax();
	});
	
	// Load Ajax
	function load_site_ajax() {
		State = History.getState(); // Note: Using History.getState() instead of event.state
		// History.log('statechange:', State.data, State.title, State.url);
		//console.log(event);
		$(".total-wrap").prepend('<div id="ajax-loader"><h4>Loading...</h4></div>');
		$("#ajax-loader").fadeIn();
		$('.subheader').fadeTo(200,0);
		$('#content').fadeTo(200,.3);
		$("header").load(State.url + ' #primary, #secondary', function(data) {
			/* After the content loads you can make additional callbacks*/
			$('.subheader').text('Ajax loaded: ' + State.url);
			$('.subheader').fadeTo(200,1);
			$('#content').fadeTo(200,1);
			
			// Updates the menu
			var request = $(data);
			$('#access').replaceWith($('#access', request));
			
		});
	}	
});