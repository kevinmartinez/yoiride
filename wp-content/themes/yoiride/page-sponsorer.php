<?
get_header();
?>	
		<!-- INTRO SECTION kommer vara återkommande i flera undersidor -->
		<section class="yellow-section margin-top">
			<div class="container"><!-- CONTAINER 970px -->
				<div class="row">
					<div class="col-md-4 pull-left">
						<div>
							<h2>SPONSORER</h2>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5 pull-left">
						<div>
							<h3>
                                                        <?php while (have_posts()) : the_post(); ?>
                                                                <?php the_content(); ?>
                                                        <?php endwhile; ?>
							</h3>
						</div>
					</div>
				</div>

			</div><!-- CONTAINER /.SLUT -->
		</section>

		<section class="white-section">
			<div class="container"><!-- CONTAINER 970px -->
				<div class="row">
					<section class="sponsor-section">
						<div class="col-md-3 col-xs-6">
							<a href="http://www.yoi.se" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sponsors/yoi.png"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="http://www.tvdags.se" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sponsors/tvdags.png"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="http://www.backupsverige.se/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sponsors/backupsverige.png"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="http://www.adtraction.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sponsors/adtraction.png"></a>
						</div>
					</section>
				</div>
				<div class="row">
					<section class="sponsor-section">
						<div class="col-md-3 col-xs-6">
							<a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sponsors/fcp.png"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="http://www.vardassistans.se" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sponsors/vardassistans.png"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sponsors/alifa.png"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="http://www.polidom.se/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sponsors/polidom.png"></a>
						</div>
					</section>
				</div>
				<div class="row">
					<section class="sponsor-section">
						<div class="col-md-3 col-xs-6">
							<a href="http://www.smxsports.se/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sponsors/smx.png"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="http://hondacity.se/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sponsors/hondacity.png"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="http://www.systemtext.se/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sponsors/systemtext.png"></a>
						</div>
						<div class="col-md-3 col-xs-6">
						</div>
					</section>
				</div>
			</div><!-- CONTAINER /.SLUT -->
		</section>

		<section class="yellow-section">
			<div class="container-fluid"><!-- CONTAINER 970px -->
				<div class="col-md-12">
					<h2 class="text-center tagline">&quot;Teamwork makes the dream work.&quot;</h2>
				</div>
			</div><!-- CONTAINER /.SLUT -->
		</section><!-- TAGLINE /.SLUT -->
<?
get_footer();
?>
