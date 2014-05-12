<?
get_header();
?>	
		<!-- INTRO SECTION kommer vara återkommande i flera undersidor -->
		<section class="yellow-section margin-top">
			<div class="container"><!-- CONTAINER 970px -->
				<div class="row">
					<div class="col-md-4 pull-left">
						<div>
							<h2>EVENT</h2>
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
		</section><!-- INTRO SECTION /.SLUT-->

		<!-- TESTAR FULL COVER BAKGRUND -->
		<section class="event-full-cover">

		</section><!-- TESTAR FULL COVER BAKGRUND /.SLUT -->

		<!-- TESTAR EN TAGLINE -->
		<section class="white-section">
			<div class="container"><!-- CONTAINER 970px -->
				<div class="col-md-12">
					<h1 class="text-center">&quot;KRAFTFULL TAGLINE HÄR&quot;</h1>
				</div>
			</div><!-- CONTAINER /.SLUT -->
		</section><!-- TAGLINE /.SLUT -->
<?
get_footer();
?>
