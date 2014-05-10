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
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

<div id="main-content" class="main-content">
		<!-- TOP SECTION -->
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
		</section>
		<!-- NEWS SECTION -->
		<section class="white-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<article> <!-- NEWS BOX -->
							<h2>NYHETER</h2>
							<h3>Vårens nyheter är här!</h3>
							<p>Äntligen så har vi fått in vårens däck på lager! Garanterar fart på vårvägarna.</p>
							<h4>10-05-2014</h4>
						</article>
					</div>
					<div class="col-md-6">
						<article><!-- RACE RAPPORT BOX -->
							<h2>RACERAPPORTER</h2>
						</article>
					</div>
				</div>
			</div>
		</section>

</div><!-- #main-content -->

<?php
//get_sidebar();
get_footer();
