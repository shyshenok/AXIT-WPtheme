<?php
function enqueue_styles() {
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri().'/bootstrap/css/bootstrap.min.css' );
	wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Raleway');
	wp_enqueue_style( 'font-style');
  wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');
  wp_enqueue_style( 'test-axit', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_enqueue_script('html5-shim');
  wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js');


}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}
