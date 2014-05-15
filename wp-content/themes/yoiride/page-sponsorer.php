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
							<a href="http://www.yoi.se"><img src="http://placehold.it/240x150&text=YOI"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="http://www.tvdags.se"><img src="http://placehold.it/240x150&text=TVDags"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="#"><img src="http://placehold.it/240x150&text=BakupSverige"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="http://www.adtraction.com"><img src="http://placehold.it/240x150&text=Adtraction"></a>
						</div>
					</section>
				</div>
				<div class="row">
					<section class="sponsor-section">
						<div class="col-md-3 col-xs-6">
							<a href="#"><img src="http://placehold.it/240x150&text=FCP"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="http://www.vardassistans.se"><img src="http://placehold.it/240x150&text=Vårdassistans"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="#"><img src="http://placehold.it/240x150&text=Alifa"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="#"><img src="http://placehold.it/240x150&text=Polidom"></a>
						</div>
					</section>
				</div>
				<div class="row">
					<section class="sponsor-section">
						<div class="col-md-3 col-xs-6">
							<a href="#"><img src="http://placehold.it/240x150&text=SMX Sport"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="#"><img src="http://placehold.it/240x150&text=Honda MC city upplands väsby"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="#"><img src="http://placehold.it/240x150&text=Systemtext"></a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="#"><img src="http://placehold.it/240x150&text=pixelkojan.se"></a>
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
