<?php 
/**
 * Setup Custom Post Types to register and optionally Taxonomies.
 *
 * @url http://codex.wordpress.org/Function_Reference/register_post_type
 *
 * @name Partners
 * @desc Custom post type for Job Descriptions on Partners page.
 * @type Post
 * @var  careers
 * @slug careers
 * @meta
 */
$labels = array(
	'name' => __( 'Partners' ),
	'singular_name' => __( 'Partner' ),
	'all_items' => __( 'All Partners' ),
	'add_new' => __( 'Add Partner' ),
	'add_new_item' => __( 'Add New Partner' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit Partner' ),
	'new_item' => __( 'New Partner' ),
	'view' => __( 'View Partner' ),
	'view_item' => __( 'View Partner' ),
	'search_items' => __( 'Search Partners' ),
	'not_found' => __( 'No Partners Found' ),
	'not_found_in_trash' => __( 'No Partners Found in Trash' ),
	'parent' => __( 'Parent Partner' ),
	'parent_item_colon' => '',
	'menu_name' => __( 'Partners' )
);
$args = array(
	'labels' => $labels,
	'description' => __( 'Partners custom post type.' ),
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'partners', 'with_front' => false ),
	'capability_type' => 'post',
	'hierarchical' => false,
	'has_archive' => false,
	'menu_position' => 25,
	'menu_icon' => 'dashicons-groups',
	'supports' => array( 'title', 'editor', 'author', 'excerpt', 'page-attributes', 'revisions' ),
	'taxonomies' => array( '' )
);
register_post_type( 'partners', $args );

