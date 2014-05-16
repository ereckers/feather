<?php
/**
 * Enqueue scripts and styles for the front end.
 *
 * We load many things from from CDNs for faster development.
 * Simply point to and load local scripts to override this behavior
 * 
 * Borrows heavily from Roots lib/scripts.php
 * @url https://github.com/roots/roots/blob/master/lib/scripts.php
 *
 * We skip the fallback because we're going to trust that Google's CDN is pretty good.
 */
function feather_theme_scripts() {
	/**
	 * Load Stylesheets
	 */

	// Latest compiled and minified Bootstrap CSS
	wp_enqueue_style( 'bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css', array(), null );

	// Load web fonts.
	wp_enqueue_style( 'font-serif', '//fonts.googleapis.com/css?family=Montserrat:400,700', array(), null );
	wp_enqueue_style( 'font-sans', '//fonts.googleapis.com/css?family=Roboto:100,300,500', array(), null );

	// Font Awesome
	//wp_enqueue_style( 'fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array(), null );

	// Load our main stylesheet.
	wp_enqueue_style( 'main', get_stylesheet_uri(), false, '1.0.0' );

	/**
	 * Load Scripts
	 */

	// Grab Google CDN's latest jQuery with a protocol relative URL
	// It's kept in the header instead of footer to avoid conflicts with plugins.
	if ( ! is_admin() && current_theme_supports('jquery-cdn' ) ) {
		wp_deregister_script('jquery');
		wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), null, false );
	}

	if ( is_single() && comments_open() && get_option('thread_comments') ) {
		wp_enqueue_script('comment-reply');
	}

	// Latest compiled and minified Bootstrap JavaScript
	wp_register_script( 'bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true );

	// Custom Feather theme scripts
	// wp_register_script( 'feather', get_template_directory_uri() . '/assets/js/scripts.js', array( 'bootstrap' ), '1.0.0', true );

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap');
	//wp_enqueue_script('feather');

}
add_action( 'wp_enqueue_scripts', 'feather_theme_scripts' );
