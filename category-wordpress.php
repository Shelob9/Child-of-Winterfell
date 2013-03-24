<?php get_header(); ?>


    <!-- Main Content -->
    <div class="twelve columns" role="content">

		<div class="row">
			<div class="four columns">
				<h2>WordPress Services</h2>
				<h4>Theme Customization</h4>
					<p>Customizing an existing theme is a cost-effective way of creating a unique site customized to fit your needs and match your branding. Theme customizations range form minor tweaks to an almsot perfect theme to major cosmetic overhauls. I can also help adapt a great desktop theme for mobile use.</p>
				<h4>Theme Development</h4>
					<p>I recently release <a href="http://complexwaveform.com/jp/winterfell" title="Winterfell WordPress Theme">Winterfell</a>, a complete theme with pintrest-style post previews and sepia color scheme. It is free to download and I offer great rates on custom child themes to customize its look and features. This site is actually running Winterfell with a <a href="https://github.com/Shelob9/Child-of-Winterfell/tree/cwf13.1">child theme</a> that alters it radically. I am also working on a responsive starter theme based on <a href="underscores.me/" title="_S WordPRess Starter Theme">_S</a> and <a href="http://foundation.zurb.com" title="Foundation Framework">ZURB Foundation 4 Framework</a> that will be called Second Foundation. Both themes use responsive layouts that automatically adapt to the screen size, making them equally suited for mobiel and desktop use. </p>
				<h4>Site Management (SEO and WPO)</h4>
					<p>Getting started and writing blog posts with WordPress couldn't be easier. Making sure your site loads quickly, gets recognized by search engines and stays safe from malware can be a little trickier. It is possible to get great page load times, and avoid malware with budjet hosting plans, but it doesn't happen with just any host or without some work. You can read thoughts on WordPress hosting hereLINK or <a href="mailto:JPollock412@gmail.com">contact me</a> to discuss how I can help improve your site load time and SEO.</p>
					
				
			</div>
			<div class="eight columns centered">
				<?php get_template_part('slider-sites'); ?>
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