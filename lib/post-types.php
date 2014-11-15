<?php 
/**
 * Register WordPress Custom Post Types
 *
 * This loads all required files at init.
 * Register each post type as file in /inc with name post-type-[name].php
 *
 * A note on sorting Custom Post Types in WordPress admin menu. If all custom 
 * post types have same menu_position you can sort position in WordPress sidebar
 * simply by sorting include order below.
 *
 * WordPress Custom Post Types
 * @url http://codex.wordpress.org/Post_Types
 */
add_action( 'init', 'load_feather_post_types' );
function load_feather_post_types() {
	include_once('inc/post-type-press.php');
	include_once('inc/post-type-team.php');
	include_once('inc/post-type-careers.php');
	include_once('inc/post-type-partners.php');
}
