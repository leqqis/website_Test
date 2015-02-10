<?php
/**
 * website_test functions and definitions
 *
 * @package website_test
 */


/**
 * Enqueue scripts and styles.
 */
function website_Test_scripts() {
	wp_enqueue_style( 'bootstrap_style', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'website_Test-style', get_stylesheet_uri() );
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'website_Test_scripts' );

	
/**
 *
 * Register menu
 */
register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'website_Test' ),
	) ); 