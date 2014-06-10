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

if (!is_front_page()) { ?>
				<?
					if(get_post_format() == 'gallery') {
						get_template_part( 'content', get_post_format() );
						return;
					}
				?>

                                <section class="yellow-section">
                                </section>

                                        <?php query_posts($query_string . '&cat=-7,-1'); ?>
                                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="white-section blog-section">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<div class="row"><!-- TITLE POST ROW -->
									<div class="col-md-12">
										<a href="<?echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>" class="blog-th">
										<img src="<?php bloginfo('template_url'); ?>/img/nils_profil.jpg">
										</a>
										<h4><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h4>
										<p>
											<i class="fa fa-user"></i> av <?php the_author_posts_link(); ?>
											| <i class="fa fa-calendar"></i><?php echo the_time('m F, Y'); ?>
										</p>
									</div>
								</div>
								<div class="row"><!-- BLOG POST ROW -->
									<div class="col-md-12"><!-- Post -->
										<br>
										<?php the_content( __("Read more &raquo;","wpbootstrap") ); ?>
										<br>
									</div>
								</div>	

                                                                <div class="row">
                                                                        <div class="col-md-12">
										<hr>
                                                                                <p><i class="fa fa-comments"></i> <a href="#">3 Comments</a></p>
										<?php $tags = get_the_tags(); 
										if($tags) {
											
											echo '<p><i class="fa fa-tags"></i><!-- Taggar: -->';
											
											foreach ( $tags as $tag) {
												echo '<a href="'.get_tag_link( $tag->term_id ).'"><span class="label label-info">'.$tag->name.'</span></a> ';
											}
											echo '</p>';
										}
										?>

										<?php $cats = get_the_category(); ?>
										<?
										if($cats) {
											echo '<p><i class="fa fa-folder-open"></i><!-- Taggar: -->';
											foreach ( $cats as $category) { 
												echo '<a href="'.get_category_link( $category->term_id ).'"><span class="label label-info">'.$category->cat_name.'</span></a> ';
											} 
											echo '</p>';
										}
										?>
                                                                                </p>
                                                                        </div>
                                                                </div>

							</div>
						</div>
					</div>
				</section>
                                <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<!--
<? if( function_exists('wp_pagenavi') ) wp_pagenavi();
?>
-->

<?
} else {
?>

		<!-- FULL COVER IMAGE SECTION -->
		<section class="index-full-cover">
			<div class="container">
				<div class="row">
					<div class="col-md-12 index-tagline text-center">
						<h1>YOIRIDE RACING</h1>
					</div>
				</div>
			</div>
							<div class="container-fluid mini-tagline">

								<div class="row">
									<div class="col-lg-6 col-lg-offset-3">
<h3>Yoiride är ett eventbolag med inriktning på motorsport, speciellt roadracing. <br><br>
										Vi är återförsäljare av Dunlop Motorsports racedäck. Vi har valt att bara sälja just racedäcken från Dunlop då vi tycker att det är de absolut bästa däcken och genom att specialisera oss på bara dessa är vi riktigt bra på det vi gör!<br><br>Vi har dessutom ett racingteam som tävlar på högsta nivå i Sverige!</h3>

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
							<a href="/team"><img src="<?php bloginfo('template_url'); ?>/img/racing_icon.png"></a>
							<p>Yoirides racingteam drog igång 2012 och tävlar idag på högsta nivå i Sverige. Vi satsar framförallt på SM men ställer även upp i SO (Scandinavian Open) och mindre tävlingar både i Sverige och utomlands.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="index-big-links">
							<a href="/dunlop"><img src="<?php bloginfo('template_url'); ?>/img/dunlop.png"></a>
							<p>Vi har valt att endast sälja Dunlop Motorsports racedäck eftersom vi tycker att det är de bästa däcken som finns att tillgå på marknaden. Vi är stolta över att leverera riktiga kvalitétsdäck!</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="index-big-links">
							<a href="/event"><img src="<?php bloginfo('template_url'); ?>/img/event_icon.png"></a>
							<p>Vi kan hjälpa er att anordna alla typer av event kring motorsport. Desto konstigare och svårare förfrågan ni har, desto roligare blir det för oss att anordna det!</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- TOP SECTION specifik för startsidan /.SLUT-->

		<!-- NEWS SECTION -->

		<section class="yellow-section">
			<div class="container">
				<!-- NEWS HEAD -->
					<div class="row">
						<div class="col-md-6">
							<h2>Nyheter</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<h3>
								Läs våra senaste nyheter och racerapporter.
							</h3>
						</div>
					</div>
					<hr>
				<div class="row">
					<?php query_posts('cat=5&limit=3'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-md-4">
						<div class="news-box index-updates"> <!-- NEWS BOX -->
							<!-- <?php $id = get_the_ID(); echo get_the_post_thumbnail($id, array(400,200)); ?>
							-->
							<h3>a<a href="/"><? echo the_title(); ?></a></h3>	
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
