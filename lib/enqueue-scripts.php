<?php
/**
 * Enqueue scripts and styles for the front end.
 * 
 * Borrows heavily from Roots lib/scripts.php
 * 
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/main.min.css
 *
 * Enqueue scripts in the following order:
 * 1. jquery-1.11.0.min.js via Google CDN
 * 2. /theme/assets/js/vendor/modernizr-2.7.0.min.js
 * 3. /theme/assets/js/main.min.js (in footer)
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

	// jQuery is loaded using the same method from HTML5 Boilerplate:
	// Grab Google CDN's latest jQuery with a protocol relative URL; fallback to local if offline
	// It's kept in the header instead of footer to avoid conflicts with plugins.
	if ( ! is_admin() && current_theme_supports('jquery-cdn' ) ) {
		wp_deregister_script('jquery');
		wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), null, false );
		//add_filter('script_loader_src', 'feather_roots_jquery_local_fallback', 10, 2);
	}

	if ( is_single() && comments_open() && get_option('thread_comments') ) {
		wp_enqueue_script('comment-reply');
	}

	// Latest compiled and minified Bootstrap JavaScript
	wp_register_script( 'bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true );

	// Custom Feather theme scripts
    wp_register_script( 'feather', get_template_directory_uri() . '/assets/js/scripts.js', array( 'bootstrap' ), '1.0.0', true );

	//wp_enqueue_script('modernizr');
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap');
	//wp_enqueue_script('feather');

}
add_action( 'wp_enqueue_scripts', 'feather_theme_scripts' );

/**
 * Roots Local jQuery Fallback
 * 
 * http://wordpress.stackexchange.com/a/12450
 */
function feather_roots_jquery_local_fallback( $src, $handle = null ) {
	static $add_jquery_fallback = false;

	if ( $add_jquery_fallback ) {
		echo '<script>window.jQuery || document.write(\'<script src="' . get_template_directory_uri() . '/assets/js/vendor/jquery-1.11.0.min.js"><\/script>\')</script>' . "\n";
		$add_jquery_fallback = false;
	}

	if ( $handle === 'jquery' ) {
		$add_jquery_fallback = true;
	}

	return $src;
}
add_action('wp_head', 'feather_roots_jquery_local_fallback');
