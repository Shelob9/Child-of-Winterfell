<?php
/*
 * Template Name: Resume Template
 */
get_header(); ?>
<header>

</header>

<!-- Main Content -->
<div class="twelve columns" role="content">
	<header style="margin-bottom:45px;">
		<div class="row" >
			<div class="six columns mobile-two">
				<h1>Josh Pollock: Resume</h1>
			</div>
			<div class="four columns mobile-one">
				<div class="row" style="margin-bottom:16px;">
					Contact:<br />
					<a href="mailto:JPollock412@gmail.com" class="genericon genericon-mail" style="font-size:32px; margin-right:16px;"></a>
					<a href="http://www.linkedin.com/pub/josh-pollock/5/900/978" class="genericon  genericon-linkedin-alt" style="font-size:32px;margin-right:16px;margin-left:16px;"></a>
					<a href="/" class="genericon genericon-home" style="font-size:32px;margin-left:16px;"></a>
					</div>
					<div class="row">
						Download Resume:<br />
						<?php
						$link = site_url('/assets/JPollockResume.odt');
						$bef = "<img src=\"";
						$aft = "\">";
						$src = get_stylesheet_directory_uri().'/stylesheets/images/odt.png';
						$icon = $bef.$src.$aft;
						?>
						<a href="<?php $odt; ?>" title="Download as Open Office Text Document">
							<?php echo $icon; ?>
						</a>
						<?php
						$link = site_url('/assets/JPollockResume.doc');
						$src = get_stylesheet_directory_uri().'/stylesheets/images/doc.png';
						$icon = $bef.$src.$aft;
						?>
						<a href="<?php $link; ?>" title="Download as Word Doc">
							<?php echo $icon; ?>
						</a>
						<?php
						$link = site_url('/assets/JPollockResume.pdf');
						$src = get_stylesheet_directory_uri().'/stylesheets/images/pdf.png';
						$icon = $bef.$src.$aft;
						?>
						<a href="<?php $link; ?>" title="Download as PDF">
							<?php echo $icon; ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
		
		<div class="row">
			<h5>Working to develop tools for environmental education and advocacy using open source software that leverage the power of online social media and promotes a re-engagement with the natural world.</h5>
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