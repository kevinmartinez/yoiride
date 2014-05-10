<?
function add_require_scripts_files() {

    wp_register_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('awesomefonts', get_stylesheet_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style('awesomefonts');

    wp_register_script('jquery', get_stylesheet_directory_uri().'/js/jquery.min.js');
    wp_enqueue_script('jquery');

    wp_register_script('bootstrapjs', get_stylesheet_directory_uri().'/js/bootstrap.min.js');
    wp_enqueue_script('bootstrapjs');

}

add_action( 'wp_enqueue_scripts', 'add_require_scripts_files' );

?>

