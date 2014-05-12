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


?>
