<?php

cwf_scriptStyles {
	//style
		//removed parent foundation.min.css
		wp_dequeue_style('foundation');
		//replace foundation.min.css
		wp_enqueue_style('child-foundation', get_stylesheet_directory_uri().'/stylesheets/foundation.min.css');
		//enqueue main css for child theme
		wp_enqueue_style('child-main', get_stylesheet_directory_uri().'/style.css');
	//js
		//masonry settings
		wp_enqueue_script('masonry-settings', get_stylesheet_directory_uri().'javascripts/custom.js');
		//prettybox
}
add_action( 'wp_enqueue_scripts', 'cwf_scriptsStyles' );
 ?>