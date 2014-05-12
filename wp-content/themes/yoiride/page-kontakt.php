<?
get_header();
?>	
		<!-- INTRO SECTION kommer vara återkommande i flera undersidor -->
		<section class="yellow-section margin-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4 pull-left">
						<div>
							<h2>KONTAKT</h2>
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
			<div class="container">
				<div class="row">
					<article class="col-sm-8 maincontent">
						<form>
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" type="text" placeholder="Namn">
								</div>
								<div class="col-sm-4">
									<input class="form-control" type="text" placeholder="E-post">
								</div>
								<div class="col-sm-4">
									<input class="form-control" type="text" placeholder="Telefon">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<textarea placeholder="Skriv ditt meddelande här..." class="form-control" rows="9"></textarea>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-6 text-right pull-right">
									<input class="btn btn-action" type="submit" value="Skicka">
								</div>
							</div>
						</form>
					</article>
					<aside class="col-sm-4 sidebar sidebar-right">
						<div>
							<h4>Adress</h4>
							<address>
								YOIRIDE Event AB (556850-8351)<br>
								ÖLANDSGATAN 42<br>
								SE-116 65 STOCKHOLM
							</address>
							<h4>Telefon:</h4>
							<address>
								0709-346 901	
							</address>
						</div>
					</aside>
				</div>
			</div>
		</section>
<?
get_footer();
?>
