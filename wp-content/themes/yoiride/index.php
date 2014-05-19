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
get_header(); 

if (!is_front_page()) {

                              while ( have_posts() ) : the_post();

                                        /*
                                         * Include the post format-specific template for the content. If you want to
                                         * use this in a child theme, then include a file called called content-___.php
                                         * (where ___ is the post format) and that will be used instead.
                                         */
                                        get_template_part( 'content', get_post_format() );

                                endwhile;

} else {
?>


		<!-- FULL COVER IMAGE SECTION -->
		<section class="index-full-cover">
			<div class="container">
				<div class="row">
					<div class="col-md-12 index-tagline text-center">
						<h1>YOIRIDE RACING</h1>
					</div>
					<div class="col-md-8 col-md-offset-2 text-center mini-tagline">
						<h3>Yoiride är ett eventbolag med inriktning på motorsport, speciellt roadracing. <br>Vi har ett racingteam som tävlar på högsta nivå i Sverige.<br><br>
						Utöver detta är vi även distributör av Dunlop Motorsports racedäck.<br>Vi har valt att bara sälja just racedäcken från Dunlop då vi tycker att det är de absolut bästa däcken och genom att specialisera oss på bara dessa blir vi riktigt bra på det vi gör!</h3>
					</div>
				</div>
			</div>
		</section>

		<!-- TOP SECTION specifik för startsidan -->
		<section class="index-main-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="index-big-links">
							<img src="<?php bloginfo('template_url'); ?>/img/racing_icon.png">
							<p>Vi är ett eventbolag som brinner för motorsport, speciellt roadracing. Yoiride anordnar idag  bandagar inom roadracing, företagsevent inom all typ av motorsport och vi har ett roadracingteam!</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="index-big-links">
							<img src="<?php bloginfo('template_url'); ?>/img/dunlop.png">
							<p>Vi har valt att endast sälja Dunlop Motorsports racedäck eftersom vi tycker att det är de bästa däcken som finns att tillgå på marknaden. Vi är stolta distributörer av kvalitétsdäck!</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="index-big-links">
							<img src="<?php bloginfo('template_url'); ?>/img/event_icon.png">
							<p>Vi kan hjälpa er att anordna alla typer av event kring motorsport. Desto konstigare och svårare förfrågan ni har, desto roligare blir det för oss att anordna det!</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- TOP SECTION specifik för startsidan /.SLUT-->

		<!-- NEWS SECTION -->

		<section class="yellow-section">
			<div class="container">
				<div class="row">
					<?php query_posts('cat=5&limit=3'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-md-4">
						<div class="news-box index-updates"> <!-- NEWS BOX -->
							<!-- <?php $id = get_the_ID(); echo get_the_post_thumbnail($id, array(400,200)); ?>
							-->
							<h3><? echo the_title(); ?></h3>	
							<h6><?php the_time( get_option( 'date_format' ) ); ?></h6>
							<article>
								<p><?php the_excerpt();?></p>
							</article>
						</div>
					</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</section>
</div><!-- #main-content -->

<?php
}

//get_sidebar();
get_footer();
