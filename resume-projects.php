<?php
$bef = "<img src=\"";
$aft = "\">";

?>
<div class="twelve columns centered">
<!--Nature Scholar-->
	<div class="row">
		<div class="three columns res-rec" >
			<?php
			$l = site_url('assets/ns3.jpg');
			$src = site_url('assets/naturescholar-300x150.jpg');
			$s = $bef.$src.$aft;
			
			?>
			<a id="single_image" class="group" rel="gallery4" href="<?php echo $l; ?>" title="Nature Scholar, main page."> 
				<?php echo $s; ?>
			</a>
			<?php $l = site_url('assets/ns1.jpg'); ?>
			<a id="single_image" class="group" rel="gallery4" href="<?php echo $l; ?>" title="Nature Scholar, books index."></a>
			<?php $l = site_url('assets/ns2.jpg'); ?>
			<a id="single_image" class="group" rel="gallery4" href="<?php echo $l; ?>" title="Nature Scholar, book review page."></a>
			
			
		</div> 
		<div class="nine columns" >
			<div class="row">
				<div class="eight columns mobile-two">
					<a href="http://NatureScholar.com" title="Nature Scholar: Guide for student of the environment">
						NatureScholar.com
					</a>
				</div>
				<div class="four columns mobile-two" style="text-align:right;" >
					2012-Present
				</div>
			</div>
				<ul style="margin-left:30px;">
					<li>Co-founder, web designer for environmental education website.</li>
					<li>Designed custom WordPress theme including author profit-sharing system utilizing Google AdWords and Amazon Associates.</li>
					<li>Responsible for contributing original content as well as soliciting content from freelancer writers.</li>
				</ul>
				<em>Site is currently in soft-launch phase while we seek funding and additional content.</em>
		</div>
	</div>
	<hr />
<!--Winterfell-->	
	<div class="row">
		<div class="three columns res-rec" >
			<?php
			$l = site_url('assets/wf141.jpg');
			$src = site_url('assets/wf141-300x266.jpg');
			$s = $bef.$src.$aft;
			
			?>
			<a id="single_image" class="group" rel="gallery5" href="<?php echo $l; ?>" title="Winterfell Responsive WordPress Theme, blog post excerpts using jQuery Masonry for Pintrest-style tiling.">
			
				<?php echo $s; ?>
			</a>
			<?php $l = site_url('assets/wf121.jpg'); ?>
			<a id="single_image" class="group" rel="gallery5" href="<?php echo $l; ?>" title="Winterfell Responsive WordPress Theme, sidebar-left page template."> </a>
			<?php $l = site_url('assets/wf111.jpg'); ?>
			<a id="single_image" class="group" rel="gallery5" href="<?php echo $l; ?>" title="Winterfell Responsive WordPress Theme, single post."></a>
			
			<?php $l = site_url('assets/lpc52.jpg'); ?>
			<a id="single_image" class="group" rel="gallery5" href="<?php echo $l; ?>" title="LorenPaulCaplin.com, about page."></a>
			<?php $l = site_url('assets/lpc55.jpg'); ?>
			<a id="single_image" class="group" rel="gallery5" href="<?php echo $l; ?>" title="LorenPaulCaplin.com, projects page."></a>
			<?php $l = site_url('assets/lpc53.jpg'); ?>
			<a id="single_image" class="group" rel="gallery5" href="<?php echo $l; ?>" title="New York Script Consultants, services page."></a>
			<?php $l = site_url('assets/lpc51.jpg'); ?>
			<a id="single_image" class="group" rel="gallery5" href="<?php echo $l; ?>" title="New York Script Consultants, welcome page."></a>
			
			
		</div>
		<div class="nine columns" >
			<div class="row">
				<div class="eight columns mobile-four">
				<?php $cat = get_category_link( '7' ); ?> 
				<a href="<?php echo $cat; ?>" title="WordPress">
					WordPress Theme Development and Site Management
				</a>
				</div>
				<div class="four columns hide-for-mobile" style="text-align:right;" >
					2011-Present
				</div>
			</div>
				<ul style="margin-left:30px;">
					<li>Developing WordPress themes, <a href="http://complexwaveform.com/jp/winterfell" title="Winterfell WordPress Theme">"Winterfell"</a> and "Second Foundation." </li>
					<li>Developed and managed <a href="http://LorenPaulCaplin.com" title="Loren-Paul Caplin">portfolio</a> and <a href="http://NewYorkScriptConsultants.com" title="New York Script Consultants">consulting</a> sites for writer, musician and professor Loren-Paul Caplin.</li>
					<li>Member of <a href="http://make.wordpress.org/themes/" title="WordPress Theme Review Team">Theme Review Team</a> for <a href="http://WordPress.org" title="WordPress.org">WordPress.org</a>.</li>
				</ul>
				<em><a href="http://themes.trac.wordpress.org/query?owner=shelob9&status=accepted&status=assigned&status=closed&status=new&status=reopened&col=id&col=summary&col=status&col=type&col=priority&col=time&col=changetime&order=priority">See my theme review tickets.</a></em>
		</div>
	</div>
	<hr />
<!--Ecohyphen-->	
	<div class="row">
		<div class="three columns res-rec" >
			<?php
			$l = site_url('assets/eh211.jpg');
			$src = site_url('assets/banner-turtle-300x100.png');
			$s = $bef.$src.$aft;
			
			?>
			<a id="single_image" class="group" rel="gallery6" href="<?php echo $l; ?>" title="Ecohyphen.com home page."> 
				<?php echo $s; ?>
			</a>
			<?php $l = site_url('assets/eh221.jpg'); ?>
			<a id="single_image" class="group" rel="gallery6" href="<?php echo $l; ?>" title="Ecohyphen Facebook page."></a>
		</div>
		<div class="nine columns" >
			<div class="row">
				<div class="eight columns mobile-two">
				<a href="http://Ecohyphen.com" title="Ecohyphen: eco-consiousness, eco-philosophy, eco-humor.">
					Ecohyphen
				</a>
				</div>
				<div class="four columns mobile-two" style="text-align:right;" >
					2012-Present
				</div>
			</div>
				<ul style="margin-left:30px;">
					<li>Developed a podcast about sustainability and eco-philosophy.</li>
					<li>Responsible for co-hosting and editing shows on weekly basis.</li>
					<li>Designed website and social media marketing system.</li>
					<li>Currently developing additional content for public radio.</li>
				</ul>
		</div>
	</div>	
	
</div>