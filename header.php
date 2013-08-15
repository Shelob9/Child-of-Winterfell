<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */

 ?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />
	
	<?php if (is_category('80') || is_category('3'))
	{
		echo '<title>';
		single_cat_title();
		echo ' &raquo; ';
		bloginfo('name');
		echo '</title>';
	}
	else
	{
		echo '<title>';
		 wp_title();
		echo '</title>';
	} ?>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<!--verifications-->
	<meta name="alexaVerifyID" content="4qrwEy0s2b-KBN1bB6pjmWOTAGo" />
	<meta name="google-site-verification" content="TlUDURK84xGP7H1ZoDZ5nLy-wb36R4fH37vy8MtSZcM" />
	<meta name="msvalidate.01" content="221B61D9D405869B5C64A7EE23963EDA" />
	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-41916543-1', 'complexwaveform.com');
		  ga('send', 'pageview');
	</script>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="row total-wrap">
	<?php if (!is_page( '463')) { ?>
		<header>
			<div class="row">
				<div class="site-title six columns mobile-four">
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Josh Pollock</a></h1>
				
				</div>
				<div class="menu-main-menu-container six columns mobile-four">
					<?php wp_nav_menu( array('menu' => 'Main Menu' )); ?>	
				</div>
			</div>
			<div class="row">
				<div class="twelve columns subheader">
					<h5>Student of Environmental Studies, Writer and WordPress guy.</h5>
				</div>
			</div>
		</header>
<!-- Begin Page -->
	<?php } ?>
	




	

	