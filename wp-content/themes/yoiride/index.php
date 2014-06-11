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
										<? $author = strtolower(get_the_author_meta('user_login'));?>	
										<img src="<?php bloginfo('template_url'); ?>/img/<?echo $author;?>_profil.jpg">
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
                                                                                <p><i class="fa fa-comments"></i> <a href="<?php the_permalink() ?>#comments"><?echo get_comments_number(); ?> Kommentarer</a></p>

										<?php 
										
										$tags = get_the_tags(); 
										
										if($tags) {
											
											echo '<p><i class="fa fa-tags"></i><!-- Taggar: -->';
											
											foreach ( $tags as $tag) {
												echo '<a href="'.get_tag_link( $tag->term_id ).'"><span class="label label-info">'.$tag->name.'</span></a> ';
											}
											echo '</p>';
										}
										?>

										<?php 
										
										$cats = get_the_category(); 
										
										if($cats) {
											echo '<p><i class="fa fa-folder-open"></i><!-- Taggar: -->';
											foreach ( $cats as $category) { 
												echo '<a href="'.get_category_link( $category->term_id ).'"><span class="label label-info">'.$category->cat_name.'</span></a> ';
											} 
											echo '</p>';
										}
										?>
                                                                                <?
                                                                                        if ( comments_open() || get_comments_number() ) {
                                                                                                comments_template();
                                                                                        }
                                                                                ?>
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
}

//get_sidebar();
get_footer();
