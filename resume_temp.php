<?php
/*
 * Template Name: Resume Template
 */
get_header(); ?>

<!-- Main Content -->
<div class="twelve columns" id="content">
	<?php get_template_part('resume','header'); ?>
	<div class="row">
		<div id="main" role="main" class="twelve columns centered ">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<?php $src = site_url('assets/r-ed.jpg') ?>
						<li data-thumb="<?php echo $src; ?>">
							<h3>Education</h3>
							<?php get_template_part('resume','education'); ?>
						</li>
						<?php $src = site_url('assets/r-skills.jpg') ?>
						<li data-thumb="<?php echo $src; ?>">
							<h3>Skills</h3>
								<?php get_template_part('resume','skills'); ?>
						</li>
						<?php $src = site_url('assets/r-proj.jpg') ?>
						<li data-thumb="<?php echo $src; ?>">
							<h3>Projects</h3>
							<?php get_template_part('resume','projects'); ?>
						</li>
						<?php $src = site_url('assets/r-exp.jpg') ?>
						<li data-thumb="<?php echo $src; ?>">
							<h3>Professional Experience</h3>
							<?php get_template_part('resume','exp'); ?>
						</li>
					</ul>
				</div>
		  </section>
	</div>
</div>
<!-- End Main Content -->
</div><!--#Total-Wrap -->
<?php wp_footer(); ?>
</body>
</html>