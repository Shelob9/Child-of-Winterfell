<?php get_header(); ?>


    <!-- Main Content -->
    <div class="twelve columns" role="content">
		<div class="row">
			<div class="ten columns centered">
				<p>Shit about WordPress</p>
			</div>
		</div>
		<div class="row">
			<div class="four columns">
				<p>Here are some WordPress theme customizations that I have done. Please send me an email if you'd like to talk about how I can help you design, deploy and manage a WordPress site.<strongalter this</strong></p>
			</div>
			<div class="eight columns centered">
				<?php get_template_part('slider-sites'); ?>
			</div>
		</div>
		
		<div class="row">
			<div class="twelve columns">
				<?php 
					if (have_posts()) :
						get_template_part( 'loop' , 'entry');
					endif;
				?>
			</div>
		</div>
		
    </div>
    <!-- End Main Content -->
</div>
<?php get_footer(); ?>