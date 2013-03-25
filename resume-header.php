	<header>
<!--header for medium and up screens-->
		<div class="row hide-for-small" >
			<div class="twelve columns">
				<div class="four columns" style="float:right;">
					<div class="row" style="margin-bottom:16px;">
						Contact:<br />
						<a href="mailto:JPollock412@gmail.com" class="genericon genericon-mail" style="font-size:32px; margin-right:16px;"></a>
						<a href="http://www.linkedin.com/pub/josh-pollock/5/900/978" class="genericon  genericon-linkedin-alt" style="font-size:32px;margin-right:16px;margin-left:16px;"></a>
						<a href="/" class="genericon genericon-home" style="font-size:32px;margin-left:16px;"></a>
					</div>
					<div class="row">
						Download Resume:<br />
						<?php
						$bef = "<img src=\"";
						$aft = "\">";
						$link = site_url('assets/JPollockResume.odt');
						$src = get_stylesheet_directory_uri().'/stylesheets/images/odt.png';
						$icon = $bef.$src.$aft;
						?>
						<a href="<?php echo $link; ?>" title="Download as Open Office Text Document" style="margin-right:16px;">
							<?php echo $icon; ?>
						</a>
						<?php
						$link = site_url('assets/JPollockResume.doc');
						$src = get_stylesheet_directory_uri().'/stylesheets/images/doc.png';
						$icon = $bef.$src.$aft;
						?>
						<a href="<?php echo $link; ?>" title="Download as Word Doc">
							<?php echo $icon; ?>
						</a>
						<?php
						$link = site_url('assets/JPollockResume.pdf');
						$src = get_stylesheet_directory_uri().'/stylesheets/images/pdf.png';
						$icon = $bef.$src.$aft;
						?>
						<a href="<?php echo $link; ?>" title="Download as PDF" style="margin-left:16px;">
							<?php echo $icon; ?>
						</a>
					</div>
				</div>
				<h1>Josh Pollock: Resume</h1>
				<p>
					Working to develop tools for environmental education and advocacy using open source software that leverages the power of online social media and promotes a re-engagement with the natural world.
				</p>
			</div>
		</div>
<!--header for medium and up screens-->
		<div class="show-for-small">
			<div class="row">
				<div class="mobile-four">
					<h3>Josh Pollock: Resume</h3>
					<p>
						Working to develop tools for environmental education and advocacy using open source software that leverages the power of online social media and promotes a re-engagement with the natural world.
					</p>
				<div>
			</div>
			<div class="row">
				<div class="mobile-two">
					<a href="mailto:JPollock412@gmail.com" class="genericon genericon-mail"></a>
					<a href="http://www.linkedin.com/pub/josh-pollock/5/900/978" class="genericon  genericon-linkedin-alt"></a>
					<a href="/" class="genericon genericon-home"></a>
				</div>
				<div class="mobile-two" >
					<?php
					$bef = "<img src=\"";
					$aft = "\" width=\"16\" height=\"16\" style=\"float:right;\">";
					$link = site_url('assets/JPollockResume.odt');
					$src = get_stylesheet_directory_uri().'/stylesheets/images/odt.png';
					$icon = $bef.$src.$aft;
					?>
					<a href="<?php echo $link; ?>" title="Download as Open Office Text Document">
						<?php echo $icon; ?>
					</a>
					<?php
					$link = site_url('assets/JPollockResume.doc');
					$src = get_stylesheet_directory_uri().'/stylesheets/images/doc.png';
					$icon = $bef.$src.$aft;
					?>
					<a href="<?php echo $link; ?>" title="Download as Word Doc">
						<?php echo $icon; ?>
					</a>
					<?php
					$link = site_url('assets/JPollockResume.pdf');
					$src = get_stylesheet_directory_uri().'/stylesheets/images/pdf.png';
					$icon = $bef.$src.$aft;
					?>
					<a href="<?php echo $link; ?>" title="Download as PDF">
						<?php echo $icon; ?>
					</a>
				</div>
			</div>
		</div>
	</header>
<!-- End headers-->