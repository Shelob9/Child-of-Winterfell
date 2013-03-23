<?php
//masonry settings
	function cwf_scriptStyles() {
	
	//style
		//enqueue main css for child theme, will also bring in parent theme css since style.css has @import for it.
		wp_enqueue_style('child-main', get_stylesheet_directory_uri().'/style.css');
	/**
	* ALTERNATIVE
	*** This method is useful if you want to add additional stylesheets and  ensure they have the correct priority.
	**Priority is given to the stylesheets in the reverse order that they are listed.
	* remove the above enqueue and remove the @import in style.css if you are using this.
	//style
		wp_enqueue_style('main', get_template_directory_uri().'/style.css');
		wp_enqueue_style('child-main', get_stylesheet_directory_uri().'/style.css');
		
	*
	**/
	//js
		/**
		* replace Masonry settings (an identical file (javascripts/custom.js) is included. Edit it to change masonry settings.
		* You may wish to not use this section if you're not changing the settings.
		**/
		wp_dequeue_script('custom');
		wp_deregister_script('custom');
		wp_enqueue_script('masonry-settings', get_stylesheet_directory_uri().'/javascripts/custom.js');
		
}
add_action( 'wp_enqueue_scripts', 'cwf_scriptStyles', 20 );
?>