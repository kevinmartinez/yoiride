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

		<section class="black-section">
			<div class="container">
					<div class="row">
						<div class="col-md-4">
							<h3>FÖRARE</h3>
						<hr>
						</div>
				</div>
			</div>
		</section>

		<section class="white-section team-main-section">
			<div class="container"><!-- CONTAINER 970px -->
				<section class="team-profiles">
					<div class="row">
						<div class="col-md-5">
							<img src="<?php bloginfo('template_url'); ?>/img/nils_profil.jpg">
							<h4 class="text-center">NILS HORN</h4>
							<hr>
							<h5 class="profile-info">
							Ålder: 32<br><br>
							Bor: På Södermalm i Stockholm<br><br>
							Hoj: CBR 1000 -09<br><br>
							Familj: Flickvän och dottern M på 18 månader
							</h5>
							<hr class="visible-xs">
						</div>
						<div class="col-md-7">
							<p>Nils intresse för motorcyklar kom när han fyllde 18 och tog sitt MC kort. Sedan dess har han aldrig varit utan hoj. Som 20 åring fick han sitt drömjobb då han började han arbeta som MC-bud i Stockholm. Att få köra hoj 10 timmar om dagen och få betalt för det, kan det bli bättre?</p>
							<p>2010 fick han upp ögonen för banracing då han tog ett par kurser via SMC. 2011 blev ett mallanår men 2012 blev fullspäckat men bandagar och tävlingdebuten kom i slutet av samma säsong och redan tredje starten resulterade i en pallplats!
							</p>
							<p>2013 blev första ”riktiga” tävlingssäsongen”. Siktet var inställt på toppen i Rookie 1000 och så blev det också. Efter 6 pallplaceringar, 7 krascher på kval och race lyckades han knipa en tredjeplats i totaltabellen.
							</p>
							<p>2014 kör Nils första säsongen i Superbike vilken är den högsta serien för 1 000 kubikare i Sverige.
							</p>
						</div>
					</div>
				</section>

			</div><!-- CONTAINER /.SLUT -->
		</section>


<!-- KOMMENTERAR BORT DETTA SÅ LÄNGE FOR THE GREATER GOOD
		<section class="yellow-section team-main-section">
			<div class="container">
				<section class="team-profiles">
					<div class="row">
						<div class="col-md-5 text-right visible-xs visible-sm">
							<img src="img/samuel_profil.jpg">
							<h4 class="text-center">SAMUEL LINDERGÅRD</h4>
							<hr>
							<h5 class="profile-info">
							Ålder: <br><br>
							Bor: <br><br>
							Hoj: CBR 1000 -09<br><br>
							Familj:
							</h5>
							<hr class="visible-xs">
						</div>
						<div class="col-md-7">
							<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
							</p>
							<p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.
							</p>
							<p>Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.
							</p>
						</div>
						<div class="col-md-5 text-right hidden-xs hidden-sm">
							<img src="img/samuel_profil.jpg">
							<h4 class="text-center">SAMUEL LINDERGÅRD</h4>
							<hr>
							<h5 class="profile-info">
							Ålder: <br><br>
							Bor: <br><br>
							Hoj: CBR 1000 -09<br><br>
							Familj:
							</h5>
						</div>
					</div>
				</section>
			</div>
		</section>



		<section class="white-section team-main-section">
			<div class="container">
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
			</div>
		</section> -->


		<section class="yellow-section">
			<div class="container-fluid"><!-- CONTAINER 970px -->
				<div class="col-md-12">
					<h2 class="text-center tagline">&quot;If everything seems under control, you're not going fast enough.&quot;</h2>
				</div>
			</div><!-- CONTAINER /.SLUT -->
		</section><!-- TAGLINE /.SLUT -->
<?
get_footer();
?>
