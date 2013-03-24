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
							

						
						</li>
						<?php $src = site_url('assets/r-skills.jpg') ?>
						<li data-thumb="<?php echo $src; ?>">
							<h3>Skills</h3>
								<UL>
<li><strong>Environmental Studies-</strong> Trans-displinary education focusing on how behaviors and practices do and do not change with regard to environmentalism.</li>
<li><strong>Web Design-</strong> WordPress theme customization using HTML, CSS, PHP, jQuery and Git. Site, project and content management.</li>
<li><strong>Social Media-</strong> Experienced with major networks and social media management systems such as Hootsuite, Bootlenose, and Buffer.</li>
<li><strong>Multimedia Production-</strong> Extensive experience with audio production and editing for music and video. Proficient with Adobe Photoshop and Illustrator.</li>
<li><strong>Writing-</strong> Studied fiction, journalism and creative non-fiction. Published articles on various oonline publications on subjects including social media, science fiction to canine PTSD.</li>
<li><strong>Computers-</strong> Highly proficient with Mac OS X including networking setup and basic hardware repair and servicing. Comfortable with basic Linux server management and setup via cPanel or terminal.</li>
<li><strong>Marketing-</strong> Experience includes on-campus marketing on behalf of Apple computers, and a recording studio as well as social marketing for a podcast. Also experienced with affiliate marketing and Google AdWords.</li>
								</UL>
						</li>
						<?php $src = site_url('assets/r-proj.jpg') ?>
						<li data-thumb="<?php echo $src; ?>">
							<h3>Projects</h3>
						</li>
						<?php $src = site_url('assets/r-exp.jpg') ?>
						<li data-thumb="<?php echo $src; ?>">
							<h3>Professional Experience</h3>
						</li>
					</ul>
				</div>
		  </section>
	</div>

	<div class="row" style="border-top:1px solid black;">
		<div class="ten columns centered">
			<div class="three mobile-one columns" id="mail>
				<a href="mailto:JPollock412@gmail.com">
					<img src="images/mail.png">
				</a>
			</div>
			<div class="three mobile-one columns" id="Word">
				<a href="https://github.com/Shelob9/place-presentation/archive/master.zip">
				<img src="images/zip.png">
				</a>
			</div>


			<div class="three mobile-one columns" id="twitter">
				  <a href="https://twitter.com/Josh412" title="Josh Pollock: Twitter">
					  <img src="images/twitter.png">
				  </a>
	  
			</div>
			<div class="three mobile-one columns" id="linkedin">
				<a href="www.linkedin.com/pub/josh-pollock/5/900/978/" title="LinkedIn Profile">
					<img src="images/linkedin.png">
				</a>
			</div>
		</div>
	 </div> 


</div>
<!-- End Main Content -->
</div><!--#Total-Wrap -->
<?php wp_footer(); ?>
</body>
</html>