<?php
/**
 * Enable theme features
 *
 * These are configuration values for both Feather theme and imported Roots theme lib files.
 *
 */
//add_theme_support('root-relative-urls');    // Enable relative URLs
add_theme_support('bootstrap-top-navbar');  // Enable Roots Bootstrap top navbar
//add_theme_support('bootstrap-gallery');     // Enable Bootstrap's thumbnails component on [gallery]
add_theme_support('nice-search');           // Enable /?s= to /search/ redirect
add_theme_support('jquery-cdn');            // Enable to load jQuery from the Google CDN

/**
 * Configuration values
 */
define('GOOGLE_ANALYTICS_ID', ''); // UA-XXXXX-Y (Note: Universal Analytics only, not Classic Analytics)
define('POST_EXCERPT_LENGTH', 40); // Length in words for excerpt_length filter (http://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length)
