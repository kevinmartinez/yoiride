		<!-- INTRO SECTION kommer vara återkommande i flera undersidor -->
		<section class="yellow-section margin-top">
			<div class="container">
				<div class="row">
					<div class="col-md-8 pull-left">
						<div>
							<h2><? the_title();?></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 pull-left">
						<div>
							<h3>
							<? the_excerpt(); ?>
							</h3>
						</div>
					</div>
				</div>
			</div>
		</section><!-- INTRO SECTION /.SLUT-->

		<section class="gallery-background text-center">
			<div class="container"><!-- CONTAINER 970px -->

		<?
    		$attachments = get_children( array(
        		'post_parent' => get_the_ID(),
        		'post_status' => 'inherit',
        		'post_type' => 'attachment',
        		'post_mime_type' => 'image',
        		'order' => 'ASC',
        		'orderby' => 'menu_order ID',
        		'numberposts' => 10)
    		);

    		foreach ( $attachments as $thumb_id => $attachment ) {
			echo '<div class="row">';
        		echo '<section class="gallery-section"><div class="col-sm-12">';
			echo wp_get_attachment_image($thumb_id,'full'); 

			$attachment_meta = wp_get_attachment($thumb_id);

		if(isset($attachment_meta['description']))
			echo '<font color="white">Kevin. styr upp ngt fint for detta :D '.$attachment_meta['description'].'</font>';
			echo '</div></section></div>';
		}

		?>
	</div>
