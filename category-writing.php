<?php get_header(); ?>


    <!-- Main Content -->
    <div class="twelve columns" id="content">
    	<div class="row">
			<h5>Here are some articles I've written for other people over the years:</h5>
		</div>
		<?php 
			if (have_posts()) :
				get_template_part( 'loop' , 'entry');
			endif;
			?>
    </div>
    <!-- End Main Content -->
</div>
<?php get_footer(); ?>