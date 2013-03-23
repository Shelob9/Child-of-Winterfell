<?php get_header(); ?>


    <!-- Main Content -->
    <div class="twelve columns" role="content">
		<div class="row">
			<div class="ten columns centered">
				<p>Shit about WordpRess</p>
			</div>
		</div>
		<div class="row">
			<div class="ten columns centered">
				<?php get_template_part('slider'); ?>
			</div>
		</div>
		
		<div class="row">
			<div class="twelve columns">
				<?php query_posts( 'cat=7' );
					the_post();
						get_template_part( 'loop', 'entry' );
				?>
			</div>
		</div>
		
    </div>
    <!-- End Main Content -->
</div>
<?php get_footer(); ?>