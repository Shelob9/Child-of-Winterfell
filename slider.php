<div class="flex-container nine columns" style="float:right">
  <div class="flexslider">
	<ul class="slides">
	<?php
	$args = array(
	category_name => 'sites',
	posts_per_page => 4
	);
	query_posts( $args );
	while ( have_posts() ) : the_post();
	?>
		<li>
			<?php the_post_thumbnail( array(367,250) ); ?>
			<?php the_content(); ?>
		</li>
	<?php
	endwhile; 
	wp_reset_query();
	?>
	</ul>
  </div>
</div>