<?
get_header();
?>	
		<!-- INTRO SECTION kommer vara återkommande i flera undersidor -->
		<section class="yellow-section margin-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4 pull-left">
						<div>
							<h2><?echo strtoupper(get_the_title(get_the_ID()));?></h2>
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
			</div>
		</section><!-- INTRO SECTION /.SLUT-->

		<section class="yellow-section">
			<div class="container"><!-- CONTAINER 970px -->

				<div class="row">
					<div class="col-md-4 pull-left">
						<h3>FÖRARE</h3>
					<hr>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<img src="http://placehold.it/250x250">
						<h4>FÖRARNAMN</h4>
					</div>
					<div class="col-md-6">
						<img src="http://placehold.it/250x250">
						<h4>FÖRARNAMN</h4>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 pull-left">
						<h3>Mekaniker</h3>
					<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<img src="http://placehold.it/250x250">
						<h4>FÖRARNAMN</h4>
					</div>
					<div class="col-md-6">
						<img src="http://placehold.it/250x250">
						<h4>FÖRARNAMN</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 pull-left">
						<h3>IT-AVDELNING</h3>
					<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<img src="http://placehold.it/250x250">
						<h4>FÖRARNAMN</h4>
					</div>
					<div class="col-md-6">
						<img src="http://placehold.it/250x250">
						<h4>FÖRARNAMN</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 pull-left">
						<h3>YOIRIDE</h3>
					<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<img src="img/bussen.jpg">
					</div>
				</div>
			</div><!-- CONTAINER /.SLUT -->
		</section>

<?
get_footer();
?>
