<?php get_header(); ?>


    <!-- Main Content -->
    <div class="twelve columns" role="content">

		<div class="row">
			<div class="four columns">
				<h2>WordPress Services</h2>
				<h4>Theme Customization</h4>
					<p>Customizing an existing theme is a cost-effective way of creating a unique site customized to fit your needs and match your branding. Theme customizations range from minor tweaks to an otherwise perfect theme, to major cosmetic overhauls. The ability to take any of the thousands of free themes out there and use it as a starting point for something new is one of my favorite things about WordPress. It is also one of my favorite things to do. I'd be happy to help you adapt any theme to your needs and I can also help adapt a great desktop theme for mobile use.</p>
				<h4>Theme Development</h4>
					<p>I recently released <a href="http://complexwaveform.com/jp/winterfell" title="Winterfell WordPress Theme">Winterfell</a>, a complete theme with pintrest-style post previews and sepia color scheme. It is free to download, and I offer great rates on custom child themes to customize its look and features. This site is actually running Winterfell with a <a href="https://github.com/Shelob9/Child-of-Winterfell/tree/cwf13.10">child theme</a> that alters its appearance to suit the requirements of this site. I am also working on an advanced starter theme <a href="http://complexwaveform.com/jp/SF/" title="_Second Foundation: WordPress Starter Theme">_Second Foundation</a>, based on <a href="underscores.me/" title="_S WordPress Starter Theme">Underscores (_S)</a> and <a href="http://foundation.zurb.com" title="Foundation Framework">ZURB Foundation 4</a>. Both themes feature responsive layouts that automatically adapt to the screen size, making them equally suited for mobiel and desktop use. </p>
					
				<h4>Site Management (SEO and WPO)</h4>
					<p>Getting started and writing blog posts with WordPress couldn't be easier. Making sure your site loads quickly, gets recognized by search engines and stays safe from malware can be a little trickier. It is possible to get great page load times, and avoid malware with budjet hosting plans, but it doesn't happen with just any host or without some work. You can read thoughts on WordPress hosting <a href="<?php echo get_permalink( '18' ); ?>"> here</a> or <a href="mailto:JPollock412@gmail.com">contact me</a> to discuss how I can help improve your site load time and SEO.</p>
					
				
			</div>
			<div class="eight columns centered">
			<h3>Some Of My WordPress Work:</h3>
				<?php get_template_part('slider-sites'); ?>
			<h3>Some Of My Thoughts on WordPress:</h3>
				<?php if (have_posts()) :
						get_template_part( 'loop' , 'entry');
					endif;
				?>
			</div>
		</div>
		
    </div>
    <!-- End Main Content -->
</div>
<?php get_footer(); ?>