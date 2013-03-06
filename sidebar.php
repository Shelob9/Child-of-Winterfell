<?php
/**
 * Sidebar
 *
 * Content for our sidebar, provides prompt for logged in users to create widgets
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */
?>

<!-- Sidebar -->

<aside>

<div class="row">
	<div class="ten columns centered panel"
		<a class="button" href="https://github.com/Shelob9/winterfell/archive/master.zip">Download</a>
	</div>
</div>

<div class="row">
	<div class="ten columns centered panel"
		<a class="button" href="https://github.com/Shelob9/winterfell/">GitHub Repo</a>
	</div>
</div>
<?php if ( dynamic_sidebar('Sidebar Right') ) : elseif( current_user_can( 'edit_theme_options' ) ) : ?>

	<h5><?php _e( 'No widgets found.', 'foundaton' ); ?></h5>
	<p><?php printf( __( 'It seems you don\'t have any widgets in your sidebar! Would you like to %s now?', 'foundation' ), '<a href=" '. get_admin_url( '', 'widgets.php' ) .' ">populate your sidebar</a>' ); ?></p>

<?php endif; ?>

</aside>
<!-- End Sidebar -->