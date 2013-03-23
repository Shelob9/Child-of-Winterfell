<?php

function cwf_scriptStyles() {
	//style
		//removed parent foundation.min.css and main style.css
		wp_dequeue_style('foundation');
		wp_deregister_style('foundation');
		wp_dequeue_style('main');
		wp_deregister_style('main');
		//replace foundation.min.css
		wp_enqueue_style('child-foundation', get_stylesheet_directory_uri().'/stylesheets/foundation.min.css');
		//enqueue main css for child theme
		wp_enqueue_style('child-main', get_stylesheet_directory_uri().'/style.css');
		//wp_enqueue_style('fc-webicons', get_stylesheet_directory_uri().'/stylesheets/fc-webicons.css');
	//js
		//masonry settings
		wp_dequeue_script('custom');
		wp_deregister_script('custom');
		wp_enqueue_script('masonry-settings', get_stylesheet_directory_uri().'/javascripts/custom.js');
		//prettybox
}
add_action( 'wp_enqueue_scripts', 'cwf_scriptStyles', 20 );
 ?>