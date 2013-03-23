<?php get_header(); ?>


    <!-- Main Content -->
    <div class="twelve columns" role="content">

		<?php query_posts( 'cat=7' );
			while ( have_posts() ) : the_post();
				get_template_part( 'loop', 'entry' );
			endwhile;
		?>
		
    </div>
    <!-- End Main Content -->
</div>
<?php get_footer(); ?>