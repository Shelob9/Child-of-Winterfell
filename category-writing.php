<?php get_header(); ?>


    <!-- Main Content -->
    <div class="twelve columns" role="content">

		<?php 
			if (have_posts()) :
				get_template_part( 'loop' , 'entry');
			endif;
			?>
    </div>
    <!-- End Main Content -->
</div>
<?php get_footer(); ?>