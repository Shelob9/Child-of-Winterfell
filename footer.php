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
		<div class="panel radi-thin ten columns centered">
			<div class="row">
				<div class="two columns" id="twitter">
					<a href="https://twitter.com/Josh412" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @Josh412</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<div class="two columns offset-by-three" id="email">
					<a href="mailto:JPollock412@gmail.com">
						<img src="<?php $src = get_stylesheet_directory_uri().'/stylesheets/images/fc-webicon-mail-s.png'; echo $src; ?>">Email me.
					</a>
				</div>
				<div class="two columns offset-by-three" id="linked-in" style="margin-top:8px;">
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