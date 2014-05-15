<?
/**
 * Theme: yoiride 
 *
 * Theme Functions, includes, etc.
 *
 * @package yoiride
 */

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
        if ( !wp_verify_nonce( $_POST['tires_price_noncename'], plugin_basename(__FILE__) )) {
        return $post->ID;
        }
 
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

?>
