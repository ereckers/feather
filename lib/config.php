<?php
/**
 * Enable theme features
 *
 * These are configuration values for both Feather theme and imported Roots theme lib files.
 *
 */
add_theme_support( 'bootstrap-top-navbar' );	// Enable Roots Bootstrap top navbar
add_theme_support( 'nice-search' );			// Enable /?s= to /search/ redirect
add_theme_support( 'jquery-cdn' );			// Enable to load jQuery from the Google CDN

/**
 * Configuration values
 */
define( 'GOOGLE_ANALYTICS_ID', '' );	// UA-XXXXX-Y (Note: Universal Analytics only, not Classic Analytics)
define( 'POST_EXCERPT_LENGTH', 40 );	// Length in words for excerpt_length filter
										// (http://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length)
define( 'ARCHIVE_WIDGET_MONTH_LIMIT', 18 ); // Limit Number of Months in WordPress Archives Widget
