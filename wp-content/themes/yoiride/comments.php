<?php
/*
The comments page for Bones
*/

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
  	<div class="alert alert-info"><?php _e("This post is password protected. Enter the password to view comments.","wpbootstrap"); ?></div>
  <?php
    return;
  }
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>

	<?php $comments_by_type = &separate_comments($comments); ?>

	<?php if ( ! empty($comments_by_type['comment']) ) : ?>

	<nav id="comment-nav">
		<ul class="clearfix">
	  		<li><?php previous_comments_link( __("Older comments","wpbootstrap") ) ?></li>
	  		<li><?php next_comments_link( __("Newer comments","wpbootstrap") ) ?></li>
	 	</ul>
	</nav>

	<ol class="commentlist">
		<?php //wp_list_comments('type=comments&callback=wp_comments'); ?>
		<?php 
		$args = array('reply_text' => 'Svara');	
		wp_list_comments($args); ?>
	</ol>
	
	<?php endif; ?>
	
	<?php if ( ! empty($comments_by_type['pings']) ) : ?>
		<h3 id="pings">Trackbacks/Pingbacks</h3>
		
		<ol class="pinglist">
			<?php wp_list_comments('type=pings&callback=list_pings'); ?>
		</ol>
	<?php endif; ?>
	
	<nav id="comment-nav">
		<ul class="clearfix">
	  		<li><?php previous_comments_link( __("Older comments","wpbootstrap") ) ?></li>
	  		<li><?php next_comments_link( __("Newer comments","wpbootstrap") ) ?></li>
		</ul>
	</nav>
  
	<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
    	<!-- If comments are open, but there are no comments. -->

	<?php else : // comments are closed 
	?>
		
	<!-- If comments are closed. -->
	<p class="alert alert-info"><?php _e("Comments are closed","wpbootstrap"); ?>.</p>
				
	<?php endif; ?>

<?php endif; ?>


<?php if ( comments_open() ) : ?>
	
	<?

$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );

	$args = array('comment_notes_after' => '',
		      'comment_notes_before' => '<p class="comment-notes">Din e-mail kommer inte att publiceras. Obligatoriska fält är markerade med *.</p>',
		      'title_reply' => 'Kommentera',
		      'label_submit' => 'Skicka kommentar',
		
  'fields' => apply_filters( 'comment_form_default_fields', array(

    'author' =>
      '<p class="comment-form-author">' .
      '<label for="author">Namn</label> ' .
      ( $req ? '<span class="required">*</span>' : '' ) .
      '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"' . $aria_req . ' /></p>',

    'email' =>
      '<p class="comment-form-email"><label for="email">E-post</label> ' .
      ( $req ? '<span class="required">*</span>' : '' ) .
      '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . ' /></p>',

    'url' =>
      '<p class="comment-form-url"><label for="url">Websida</label>' .
      '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" size="30" /></p>'
    )
  ),

  'comment_field' =>  '<p class="comment-form-comment"><label for="comment">Kommentar</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>',

	);

	comment_form($args); ?>

<?php endif; // if you delete this the sky will fall on your head ?>
