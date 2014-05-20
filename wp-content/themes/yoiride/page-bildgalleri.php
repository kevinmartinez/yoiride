<?
get_header();
?>	
		<!-- INTRO SECTION kommer vara återkommande i flera undersidor -->
		<section class="yellow-section margin-top">
			<div class="container"><!-- CONTAINER 970px -->
				<div class="row">
					<div class="col-md-4 pull-left">
						<div>
							<h2>BILDGALLERI</h2>
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
		</section>


		<!-- IMAGE GALLERY == THUMBNAILS 300x250 -->
		<section class="white-section">
			<div class="container">
<?

	$args = array(
    		'post_type'=> 'post',
    		'post_status' => 'publish',
    		'order' => 'DESC',
    		'tax_query' => array(
        		array(
            			'taxonomy' => 'post_format',
           	 		'field' => 'slug',
            			'terms' => array( 'post-format-gallery' )
        		)
    		)
	);
	$count = 0;
	$start = 0;
	
	$query = new WP_query($args);
		while($query->have_posts()) : $query->the_post();
		if(!has_post_thumbnail()) continue;
		$closed = 0;

		if($start == 0) { 
			echo '<!-- IMAGE ROW -->';
			echo '<div class="row">';
			echo '<section class="image-section text-center">';
			$start = 1;
		} 
		if ( has_post_thumbnail() ) {
		?>
		
			<div class="col-sm-4 col-xs-12">
				<a href="<?php echo get_permalink($post->ID); ?>"> <? the_post_thumbnail(array(300,250));?>
					<div class="caption">
						<h3><?the_title();?></h3>
					</div>
				</a>
			</div>

		<? }

		if($count == 2) { 
			echo '</section>';
			echo '</div><!-- /.SLUT -->';
			$count = 0; $start = 0; $closed = 1; 
		} else $count += 1;

		endwhile;
		if ($closed == 0) {
                       echo '</section>';
                       echo '</div><!-- /.SLUT -->';	
		} 

?>
			</div><!-- CONTAINER /.SLUT -->
		</section>

		<section class="yellow-section">
			<div class="container-fluid"><!-- CONTAINER 970px -->
				<div class="col-md-12">
					<h2 class="text-center tagline">&quot;A photograph shouldn't be just a picture, it should be a philosophy.&quot;</h2>
				</div>
			</div><!-- CONTAINER /.SLUT -->
		</section><!-- TAGLINE /.SLUT -->


<?
get_footer();
?>
