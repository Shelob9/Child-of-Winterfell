<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */
?>


<!-- End Page -->





<!-- Footer -->
<footer>
	
	<div class="row">
		<div class=" ten columns centered">
			<div class="row">
				<div class="two columns mobile-two" id="twitter">
					<a href="https://twitter.com/Josh412" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @Josh412</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<div class="three columns offset-by-four mobile-two">
					<a href="mailto:JPollock412@gmail.com">
						<img src="<?php $src = get_stylesheet_directory_uri().'/stylesheets/images/fc-webicon-mail-m.png'; echo $src; ?>" >
					</a>
					<a href="https://plus.google.com/u/0/108295629672902361491" rel="me">
						<img src="<?php $src = get_stylesheet_directory_uri().'/stylesheets/images/fc-webicon-googleplus-m.png'; echo $src; ?>" >
					</a>
				</div>
				<div class="two columns extra-button">
<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/MemberProfile" data-id="http://www.linkedin.com/pub/josh-pollock/5/900/978" data-format="hover" data-text="Josh Pollock" data-related="false"></script>
				</div>
			</div>
		</div>
	</div>
		
	
</footer>
<!-- End Footer -->

</div><!--#Total-Wrap -->
<?php wp_footer(); ?>
</body>
</html>