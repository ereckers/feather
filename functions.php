<?php
/**
 * The functions file is used to initialize everything in the theme. It controls how the theme is loaded and
 * sets up the supported features, default actions, and default filters.
 *
 * @package Feather
 * @version 1.0.0
 * @author Ed Reckers <ed@redbridgenet.com>
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

if ( ! function_exists( 'feather_theme_setup' ) ) :
/**
 * Theme setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 */
function feather_theme_setup() {

	/*
	 * Make available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Feather, use a find and
	 * replace to change 'feather' to the name of your theme in all
	 * template files.
	 */
	//load_theme_textdomain( 'feather', get_template_directory() . '/languages' );

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size(150, 150, false);
	// add_image_size('category-thumb', 300, 9999); // 300px wide (and unlimited height)

	// Add post formats (http://codex.wordpress.org/Post_Formats)
	// add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

	// Register menu locations for creating menus with wp_nav_menu().
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'feather' ),
		'secondary' => __( 'Secondary Menu', 'feather' ),
		'footer' => __( 'Footer Menu', 'feather' )
	) );

}
endif; // feather_theme_setup
add_action( 'after_setup_theme', 'feather_theme_setup' );

/**
 * $content_width is a global variable used by WordPress for max image upload sizes
 * and media embeds (in pixels).
 *
 * Example: If the content area is 640px wide, set $content_width = 620; so images and videos will not overflow.
 * Default: 1140px is the default Bootstrap container width.
 */
if ( !isset( $content_width ) ) { $content_width = 1140; }

/**
 * Load config
 */
require get_template_directory() . '/lib/config.php';

/**
 * Load utils
 *
 * This includes functions lifted from Roots and Underscores themes that 
 * couldn't be included with the main file, needed customizations, or both.
 */
require get_template_directory() . '/lib/utils.php';

/**
 * Register widget areas
 */
require get_template_directory() . '/lib/register-widgets.php';

/**
 * Enqueue scripts and styles
 */
require get_template_directory() . '/lib/enqueue-scripts.php';

/**
 * Load Roots /lib Files
 *
 * https://github.com/roots/roots
 * http://roots.io/starter-theme/
 */
require get_template_directory() . '/lib/roots/comments.php';
require get_template_directory() . '/lib/roots/nav.php';
require get_template_directory() . '/lib/roots/utils.php';
require get_template_directory() . '/lib/roots/cleanup.php';
require get_template_directory() . '/lib/roots/titles.php';

