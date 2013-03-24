<?php
/*
 * Template Name: Resume Template
 */
get_header(); ?>
<header>

</header>

<!-- Main Content -->
<div class="twelve columns" role="content">
	<hgroup style="margin-bottom:45px;">
		<div class="row" >
			<div class="nine columns mobile-two">
				<h1>Josh Pollock: Resume</h1>
			</div>
			<div class="one columns mobile-one" >
				<?php
				$f = site_url('/assets/Josh.jpg', 'http'); 
				$t = site_url('assets/Josh-50x66.jpg', 'http'); 
				?>					
				<a id="single_image" class="group" href="<?php echo $f; ?>" title="Josh Pollock."> 
					<img src="<?php echo $t; ?>">
				</a>
			</div>
			<div class="two columns mobile-one">
				<a href="mailto:JPollock412@gmail.com" class="genericon genericon-mail" style="font-size:32px; margin-right:16px;"></a>
				<a href="http://www.linkedin.com/pub/josh-pollock/5/900/978" class="genericon  genericon-linkedin-alt" style="font-size:32px;margin-right:16px;margin-left:16px;"></a>
				<a href="/" class="genericon genericon-home" style="font-size:32px;margin-left:16px;"></a>
			</div>
		</div>
		<div class="row">
			<h5>Working to develop tools for environmental education and advocacy using open source software that leverage the power of online social media and promote a re-engagement with the natural world.</h5>
		</div>
	</hgroup>
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