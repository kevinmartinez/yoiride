<?
/**
 * Theme: yoiride 
 *
 * Theme Functions, includes, etc.
 *
 * @package yoiride
 */

function wp_get_attachment( $attachment_id ) {

	$attachment = get_post( $attachment_id );
	return array(
		'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
		'caption' => $attachment->post_excerpt,
		'description' => $attachment->post_content,
		'href' => get_permalink( $attachment->ID ),
		'src' => $attachment->guid,
		'title' => $attachment->post_title,
		'author' => $attachment->post_author
	);
}

function add_require_scripts_files() {

    wp_register_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('awesomefonts', get_stylesheet_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style('awesomefonts');

    wp_register_script('jquery', get_stylesheet_directory_uri().'/js/jquery.min.js');
    wp_enqueue_script('jquery');

    wp_register_script('bootstrapjs', get_stylesheet_directory_uri().'/js/bootstrap.min.js');
    wp_enqueue_script('bootstrapjs');

    wp_register_style( 'style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( 'style' );

}

add_action( 'wp_enqueue_scripts', 'add_require_scripts_files' );

function create_post_type() {
	register_post_type( 'tires',
		array(
			'labels' => array(
				'name' => __( 'Tires' ),
				'singular_name' => __( 'Tire' ),
			'show_ui' => true
			),
		'supports' => array('title', 'editor', 'thumbnail'),
		'public' => true,
		'has_archive' => true,
		)
	);
}

add_action( 'init', 'create_post_type');


function addthemesupport() {
	remove_theme_support('post-thumbnails');
  	add_theme_support('post-thumbnails', array('post', 'tires'));
	set_post_thumbnail_size( 350 , 250, true ); // default Post Thumbnail dimensions (cropped)
}

add_action( 'after_setup_theme', 'addthemesupport');

add_theme_support( 'post-formats', array( 'gallery') );


/* Removes the admin bar for logged in users */
function remove_admin_bar() { 
	return false; 
}


add_filter( 'show_admin_bar' , 'remove_admin_bar');

add_action('add_meta_boxes', 'tires_custom_meta_boxes');
 
function tires_custom_meta_boxes() {
        add_meta_box('tires_price', 'Pris', 'tires_price', 'tires', 'side', 'default');
}

function tires_price() {
        global $post;
 
        // Noncename needed to verify where the data originated
        echo '<input type="hidden" name="tires_price_noncename" id="tires_price_noncename" value="' .
                wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
 
        $price = get_post_meta($post->ID, '_price', true);
 
        echo '<p>Pris</p>';
        echo '<input type="text" name="_price" value="' . $price  . '" class="widefat" />';
}

function tire_save_price_meta($post_id, $post) {
 
        // verify this came from the our screen and with proper authorization,
        // because save_post can be triggered at other times
	if(isset($_POST['tires_price_noncename']))
        	if ( !wp_verify_nonce( $_POST['tires_price_noncename'], plugin_basename(__FILE__) )) {
        	return $post->ID;
        	}
	else
		return $post->ID;
 
        // Is the user allowed to edit the post or page?
        if ( !current_user_can( 'edit_post', $post->ID ))
                return $post->ID;
 
        // OK, we're authenticated: we need to find and save the data
        // We'll put it into an array to make it easier to loop though.
 
        $members_meta['_price'] = $_POST['_price'];
   
        // Add values of $members_meta as custom fields
 
        foreach ($members_meta as $key => $value) { // Cycle through the $members_meta array!
                if( $post->post_type == 'revision' ) return; // Don't store custom data twice
                $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
                if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
                        update_post_meta($post->ID, $key, $value);
                } else { // If the custom field doesn't have a value
                        add_post_meta($post->ID, $key, $value);
                }
                if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
        }
 
}

add_action('save_post', 'tire_save_price_meta', 1, 2); // save the custom fields

#remove_action('do_feed_rdf', 'do_feed_rdf', 10, 1);
#remove_action('do_feed_rss', 'do_feed_rss', 10, 1);
#remove_action('do_feed_rss2', 'do_feed_rss2', 10, 1);
#remove_action('do_feed_atom', 'do_feed_atom', 10, 1);

// Remove height/width attributes on images so they can be responsive
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
 
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}


class Comment_Says_Custom_Text_Wrangler {
        function comment_says_text($translation, $text, $domain) {
        	$new_says = ''; //whatever you want to have instead of 'says' in comments
    		$translations = &get_translations_for_domain( $domain );
    		if ( $text == '<cite class="fn">%s</cite> <span class="says">says:</span>' ) {
           		if($new_says) $new_says = ' '.$new_says; //compensate for the space character
       				return $translations->translate( '<cite class="fn">%s</cite><span class="says">'.$new_says.':</span>' );
     		} else {
    			return $translation; // standard text
         	}  
        }
}

add_filter('gettext', array('Comment_Says_Custom_Text_Wrangler', 'comment_says_text'), 10, 4);


function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


add_action('wp_head', 'add_fb_open_graph_tags');

function add_fb_open_graph_tags() {
	if (is_single()) {
		global $post;
		if(get_the_post_thumbnail($post->ID, 'thumbnail')) {
			$thumbnail_id = get_post_thumbnail_id($post->ID);
			$thumbnail_object = get_post($thumbnail_id);
			$image = $thumbnail_object->guid;
		} else {	
			$image = ''; // Change this to the URL of the logo you want beside your links shown on Facebook
		}
		//$description = get_bloginfo('description');
		$description = my_excerpt( $post->post_content, $post->post_excerpt );
		$description = strip_tags($description);
		$description = str_replace("\"", "'", $description);
		?>
		<meta property="og:title" content="<?php the_title(); ?>" />
		<meta property="og:type" content="article" />
		<!-- <meta property="og:image" content="<?php echo $image; ?>" /> -->
		<meta property="og:url" content="<?php the_permalink(); ?>" />
		<meta property="og:description" content="<?php echo $description ?>" />
		<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />

      <?php }

	elseif(is_page()) {
		?>
		<meta property="og:title" content="YOIRIDE" />
		<meta property="og:url" content="<?php the_permalink(); ?>" />
		<meta property="og:image:url" content="http://www.yoiride.se/wp-content/themes/yoiride/img/nav_bar_logo.png" /> 
		<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:description" content="Återförsäljare av Dunlop Motorsports racedäck. Vi anordnar alla typer av roliga och festliga events inom motorsport och har ett eget raceteam." />
		<?
	}
}


function my_excerpt($text, $excerpt){
	
    if ($excerpt) return $excerpt;

    $text = strip_shortcodes( $text );

    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
    $text = strip_tags($text);
    $excerpt_length = apply_filters('excerpt_length', 55);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    $words = preg_split("/[\n
	 ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
            array_pop($words);
            $text = implode(' ', $words);
            $text = $text . $excerpt_more;
    } else {
            $text = implode(' ', $words);
    }

    return apply_filters('wp_trim_excerpt', $text, $excerpt);
}

