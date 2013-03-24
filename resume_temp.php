<?php
/*
 * Template Name: Resume Template
 */
get_header(); ?>


    <!-- Main Content -->
    <div class="twelve columns" role="content">
<div class="four columns">
			<?php $src = site_url('/assets/sitting@goddard.jpg', 'http'); ?>
			<img src="<?php echo $src; ?>" class="radi-only">
		</div>
		<div class="eight columns" >
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>
		</div>
    </div>
    <!-- End Main Content -->
</div>
<?php get_footer(); ?>