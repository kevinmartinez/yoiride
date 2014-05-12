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
		<section class="yellow-section">
		<ol class="breadcrumb">
			<li><a href="index.html">STARTSIDA</a></li>
			<li>DUNLOP</li>
			<li class="active">DÄCK</li>
		</ol>
			<div class="container">
				<div class="row">
					<div class="col-md-4 pull-left">
						<div>
							<h2>DÄCK</h2>
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

		<?
			$args = array( 'post_type' => 'tires', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			$odd = TRUE;

			while ( $loop->have_posts() ) : $loop->the_post();
			
			$section = $odd ? "white-section" : "yellow-section";
			$colfirst = $odd ? "col-md-4 dack-image" : "col-md-8";
			$colsecond = $odd ? "col-md-8" : "col-md-4 dack-image";

		?>
			
		<!-- DÄCK SECTION -->
		<section class="<? echo $section ?>">
			<div class="container">
				<div class="row">
					<!--DÄCKARTIKEL MED VÄNSTERSTÄLLD BILD-->
					<div class="col-md-12">
						<div class="<? echo $colfirst;?>">
							<? if ($colfirst == 'col-md-4 dack-image') { ?>	
							<?php echo get_the_post_thumbnail(get_the_ID(),  array(350,250) , array('class' => '') ); ?>
							<? } else { ?>
							<h3><? the_title(); ?> </h3>
							<?the_content(); ?>
							<? } ?>
							
						</div>
						<div class="<? echo $colsecond; ?>">
                                                        <? if ($colsecond == 'col-md-4 dack-image') { ?>
							<?php echo get_the_post_thumbnail(get_the_ID(),  array(350,250) , array('class' => '') ); ?>
                                                        <? } else { ?>
                                                        <h3><? the_title(); ?> </h3>
                                                        <?the_content(); ?>
                                                        <? } ?>
						</div>
					</div><!--DÄCKARTIKEL MED VÄNSTERSTÄLLD BILD /.SLUT-->
				</div>
			</div>
		</section>
		
	 	<?

		$odd = $odd ? FALSE : TRUE; 

		endwhile; 
		?>
<?php
get_footer();
