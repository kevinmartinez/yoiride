<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?>
		<!-- INTRO SECTION kommer vara återkommande i flera undersidor -->
		<section class="yellow-section margin-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4 pull-left">
						<div>
							<h2>VÅRA DÄCK</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div>
						        <?php while (have_posts()) : the_post(); ?>
                                                                <?php the_content(); ?>
                                                        <?php endwhile; ?>	
						</div>
					</div>
						<div class="col-md-4 pull-right hidden-sm hidden-xs">
							<img src="<?php bloginfo('template_url'); ?>/img/dunlop_big.png">
						</div>
					</div>
				</div>
			</div>
		</section><!-- INTRO SECTION /.SLUT-->


		<?
			$args = array( 'post_type' => 'tires', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			$odd = TRUE;

			while ( $loop->have_posts() ) : $loop->the_post();
		?>
			
		<!-- DÄCK SECTION -->
		<section class="white-section">

			<div class="container">
				<div class="row">
					<div class="col-md-8">
					<!--DÄCKARTIKEL MED VÄNSTERSTÄLLD BILD-->
						<h4><? the_title(); ?></h4>
						<? the_content(); ?>
					</div>
				<div class="col-md-4">
					<div>
						<?php echo get_the_post_thumbnail(get_the_ID(),  array(350,250) , array('class' => 'img-rounded') ); ?>
						<?
						$id = get_the_ID();
						$price = get_post_meta( $id, "_price", TRUE );	
						$pricemoms = $price * 1.25; 
						?>
						<h4 class="text-center">Pris: <?echo $price; ?> kr (<? echo $pricemoms; ?> kr ink moms)</h4>
						<button type="button" class="btn btn-default btn-lg btn-block active">Ring oss: <a href="tel:+46709346901">0709-346 901</a></button>
					</div>
				</div>
				</div>
				<hr>
			</div>
		</section>
		<?endwhile;?>

  <section class="yellow-section">
   <div class="container-fluid"><!-- CONTAINER 970px -->
    <div class="col-md-12">
     <h2 class="text-center tagline">&quot;The best tyres on the market.&quot;</h2>
    </div>
   </div><!-- CONTAINER /.SLUT -->
  </section><!-- TAGLINE /.SLUT -->

<?php

get_footer();
