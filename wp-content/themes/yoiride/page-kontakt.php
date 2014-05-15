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

		<section class="white-section">
			<div class="container">
				<div class="row">
					<article class="col-sm-7 contact-content">
						<form>
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" type="text" placeholder="Namn">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" type="text" placeholder="E-post">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" type="text" placeholder="Telefon">
								</div>
							</div>
							<br>
							<br>
							<div class="row">
								<div class="col-sm-10">
									<textarea placeholder="Skriv ditt meddelande här..." class="form-control" rows="12"></textarea>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-6 text-left pull-left">
									<input class="btn btn-action" type="submit" value="Skicka">
								</div>
							</div>
						</form>
					</article>
					<aside class="col-sm-5 sidebar sidebar-right">
						<div>
							<h4>Adress</h4>
							<address>
								YOIRIDE EVENT AB (556850-8351)<br>
								ÖLANDSGATAN 42<br>
								116 63 Stockholm
							</address>
							<hr>
							<h4>Nils Horn</h4>
							<address>
								<h5>E-POST:</h5> <a href="mailto:nils@yoiride.se">nils@yoiride.se</a>
								<h5>MOBIL:</h5><a href="tel:+46709346901">0709-346 901</a>
							</address>
							<hr>
							<h4>Samuel Lindergård</h4>
							<address>
								<h5>E-POST:</h5><a href="mailto:samuel@yoiride.se">samuel@yoiride.se</a>
								<h5>MOBIL:</h5><a href="tel:+46736636314">0736-636 314</a>
							</address>
						</div>
					</aside>
				</div>
			</div>
		</section>

<?
get_footer();
?>
