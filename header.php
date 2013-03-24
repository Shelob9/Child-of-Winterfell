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

	<title><?php wp_title(); ?></title>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="row total-wrap">
	<?php if (!is_page( '478')) { ?>
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
	




	

	