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

<div id="main-content" class="main-content">

		<!-- FULL COVER IMAGE SECTION -->
		<section class="index-full-cover">
			<div class="container">
				<div class="row">
					<div class="col-md-9 index-tagline">
						<h1>YOIRIDE RACING</h1>
						<h3>Vår passion är racing! Vi är ett eventbolag med inriktning på motorsport, speciellt roadracing. Vi har ett racingteam som tävlar på högsta nivå i Sverige.<br><br>
						Utöver detta är vi även distributör av Dunlop Motorsports racedäck. Vi har valt att bara sälja just racedäcken från Dunlop då vi tycker att det är de absolut bästa däcken och genom att specialisera oss på bara dessa blir vi riktigt bra på det vi gör!</h3>
					</div>
				</div>
			</div>
		</section>

		<!-- TOP SECTION specifik för startsidan -->
		<section class="yellow-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>YOIRIDE</h1>
						<p>Vi är ett eventbolag som brinner för motorsport, speciellt roadracing. Grundarna Nils Horn och Samuel Lindergård har båda lång erfarenhet av motorsport och fick 2009 fick upp ögonen för roadracing. Sedan dess har allt gått fort.<br>
						Yoiride anordnar idag  bandagar inom roadracing, företagsevent inom all typ av motorsport och vi har ett roadracingteam!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="index-big-links">
							<h2>RACING</h2>
							<p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="index-big-links">
							<h2>DUNLOP</h2>
							<p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="index-big-links">
							<h2>EVENT</h2>
							<p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- TOP SECTION specifik för startsidan /.SLUT-->

		<!-- NEWS SECTION -->

		<section class="white-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<?php query_posts('cat=5&limit=1'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article class="news-box"> <!-- NEWS BOX -->
							<h2>NYHETER</h2>
							<h3><a href="<?php echo get_permalink(); ?>"><? echo the_title(); ?></a></h3>
							<p><?php echo get_the_post_thumbnail('thumbnail'); ?></p>
							<p><?php the_content();?></p>
							<h4><?php the_time( get_option( 'date_format' ) ); ?></h4>
						</article>
						<?php endwhile; endif; ?>
					</div>
					<?php rewind_posts();?>
					<?wp_reset_query();?>
					<div class="col-md-6">
                                                <?php query_posts('cat=6&limit=1'); ?>
                                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                                <article> <!-- RACERAPPORTER BOX -->
                                                        <h2>RACERAPPORT</h2>
                                                        <h3><a href="<?php echo get_permalink(); ?>"><? echo the_title(); ?></a></h3>
                                                        <p><?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail'); ?></p>
                                                        <p><?php the_content();?></p>
                                                        <h4><? the_time( get_option( 'date_format' ) ); ?></h4>
                                                </article>
                                                <?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</section>

</div><!-- #main-content -->

<?php
//get_sidebar();
get_footer();
