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
					<section class="image-section">
						<div class="col-sm-4 col-xs-12">
							<a href="#"><img src="http://placehold.it/300x250&text=BILDTEST"></a>
						</div>
						<div class="col-sm-4 col-xs-12">
							<a href="#"><img src="http://placehold.it/300x250&text=BILDTEST"></a>
						</div>
						<div class="col-sm-4 col-xs-12">
							<a href="#"><img src="http://placehold.it/300x250&text=BILDTEST"></a>
						</div>
					</section>
				</div>
				<div class="row">
					<section class="image-section">
						<div class="col-sm-4 col-xs-12">
							<a href="#"><img src="http://placehold.it/300x250&text=BILDTEST"></a>
						</div>
						<div class="col-sm-4 col-xs-12">
							<a href="#"><img src="http://placehold.it/300x250&text=BILDTEST"></a>
						</div>
						<div class="col-sm-4 col-xs-12">
							<a href="#"><img src="http://placehold.it/300x250&text=BILDTEST"></a>
						</div>
					</section>
				</div>
				<div class="row">
					<section class="image-section">
						<div class="col-sm-4 col-xs-12">
							<a href="#"><img src="http://placehold.it/300x250&text=BILDTEST"></a>
						</div>
						<div class="col-sm-4 col-xs-12">
							<a href="#"><img src="http://placehold.it/300x250&text=BILDTEST"></a>
						</div>
						<div class="col-sm-4 col-xs-12">
							<a href="#"><img src="http://placehold.it/300x250&text=BILDTEST"></a>
						</div>
					</section>
				</div>
			</div><!-- CONTAINER /.SLUT -->
		</section>

		<section class="yellow-section">
			<div class="container-fluid"><!-- CONTAINER 970px -->
				<div class="col-md-12">
					<h2 class="text-center tagline">&quot;A photograph shouldn't be just a picture, it should be a philosophy.&quot;</h2>
				</div>
			</div><!-- CONTAINER /.SLUT -->
		</section><!-- TAGLINE /.SLUT -->


<?
get_footer();
?>
