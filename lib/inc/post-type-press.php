<?php 
/**
 * Setup Custom Post Types to register and optionally Taxonomies.
 *
 * @url http://codex.wordpress.org/Function_Reference/register_post_type
 * @url http://codex.wordpress.org/Function_Reference/register_taxonomy
 *
 * @name Press
 * @desc Custom post type for Press Releases.
 * @type Post
 * @var  press
 * @slug press
 * @meta
 */
$labels = array(
	'name' => __( 'Press Releases' ),
	'singular_name' => __( 'Press Release' ),
	'all_items' => __( 'All Press Releases' ),
	'add_new' => __( 'Add Press Release' ),
	'add_new_item' => __( 'Add New Press Release' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit Press Release' ),
	'new_item' => __( 'New Press Release' ),
	'view' => __( 'View Press Release' ),
	'view_item' => __( 'View Press Release' ),
	'search_items' => __( 'Search Press' ),
	'not_found' => __( 'No Press Found' ),
	'not_found_in_trash' => __( 'No Press Found in Trash' ),
	'parent' => __( 'Parent Press Release' ),
	'parent_item_colon' => '',
	'menu_name' => __( 'Press' )
);
$args = array(
	'labels' => $labels,
	'description' => __( 'Press Release custom post type.' ),
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'press', 'with_front' => false ),
	'capability_type' => 'post',
	'hierarchical' => false,
	'has_archive' => false,
	'menu_position' => 25,
	'menu_icon' => 'dashicons-pressthis',
	'supports' => array( 'title', 'editor', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'revisions' ),
	'taxonomies' => array( '' )
);
register_post_type( 'press', $args );

