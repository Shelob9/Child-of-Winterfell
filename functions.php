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
		//genericons
		wp_enqueue_style('genericons', get_stylesheet_directory_uri().'/stylesheets/genericons.css');
		// flexslider
		wp_enqueue_script('flexslider', get_stylesheet_directory_uri().'/javascripts/jquery.flexslider-min.js', array('jquery'));
		wp_enqueue_script('flexslider-init', get_stylesheet_directory_uri().'/javascripts/flexslider-init.js', array('jquery', 'flexslider'));
		wp_enqueue_style('flexslider', get_stylesheet_directory_uri().'/stylesheets/flexslider.css');
	
		//Fancybox
		wp_enqueue_style('fancybox', get_stylesheet_directory_uri().'/stylesheets/jquery.fancybox.css');
		wp_enqueue_script('fancybox', get_stylesheet_directory_uri().'/javascripts/jquery.fancybox.js');
		wp_enqueue_script('fancyboxSet', get_stylesheet_directory_uri().'/javascripts/fancybox-set.js', array(), false, true);
		//enqueue main css for child theme
		wp_enqueue_style('child-main', get_stylesheet_directory_uri().'/style.css');
		
	//js
		/**masonry settings
		wp_dequeue_script('custom');
		wp_deregister_script('custom');
		wp_enqueue_script('masonry-settings', get_stylesheet_directory_uri().'/javascripts/custom.js');
		**/
		
	}
add_action( 'wp_enqueue_scripts', 'cwf_scriptStyles', 20 );
		add_image_size( 'face', 50, 66);
		add_image_size( '50sq', 50, 50);
		add_image_size( 'flexthumbnav', 400, 250);
		add_image_size( '300sq',  300, 300);
		add_image_size( '500sq',  500, 500 );
		add_image_size( '600sq',  600, 600);
		
/*
 * AJAX page Loads
 * Method from: http://wptheming.com/2011/12/ajax-themes/
 *
 * https://github.com/balupton/History.js
 *
 */
 
function _sf_ajax_page_load() {
		if ( get_theme_mod( '_sf_ajax' ) == '' ) {
			if ( !is_admin() ) :
				wp_deregister_script('historyjs');
				wp_register_script( 'historyjs', get_stylesheet_directory_uri(). '/javascripts/jquery.history.js', array( 'jquery' ), '1.7.1' );
				wp_enqueue_script( 'historyjs' );
				wp_register_script( 'ajax_init', get_stylesheet_directory_uri(). '/javascripts/ajax_load.js', array( 'historyjs' ), false, true );
				wp_enqueue_script( 'ajax_init' );
			endif;
		}	
}

add_action( 'wp_enqueue_scripts','_sf_ajax_page_load' );

 

?>