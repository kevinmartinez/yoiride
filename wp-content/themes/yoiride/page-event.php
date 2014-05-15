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

					<div class="col-md-4 pull-right hidden-sm hidden-xs">
						<img src="<?php bloginfo('template_url'); ?>/img/yoiride_stripes_black_big.png">
					</div>
				</div>

			</div><!-- CONTAINER /.SLUT -->
		</section><!-- INTRO SECTION /.SLUT-->

		<!-- TESTAR FULL COVER BAKGRUND -->
		<section class="event-full-cover">

		</section><!-- TESTAR FULL COVER BAKGRUND /.SLUT -->

		<!-- TESTAR EN TAGLINE -->
		<section class="white-section">
			<div class="container-fluid"><!-- CONTAINER 970px -->
				<div class="col-md-12">
					<h2 class="text-center tagline">&quot;We take your fun seriously.&quot;</h1>
				</div>
			</div><!-- CONTAINER /.SLUT -->
		</section><!-- TAGLINE /.SLUT -->
<?
get_footer();
?>
