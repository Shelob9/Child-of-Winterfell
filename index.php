<?php
/**
 * 
 * MAIN INDEX LOOP
 */

?>
<?php get_header(' '); ?>

	
<div class="row" id="mains">
	<div class="twelve columns">
		<div class="twelve columns" id="masonry-wrap">	
			<?php 
			if (have_posts()) :
				get_template_part( 'loop' , 'entry');
			endif;
			?>
		</div>
		<!-- /masonry-wrap -->
	</div>		
		
</div>
</div>
<?php get_footer(' '); ?>