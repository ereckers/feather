<?php 
/**
 * Setup Custom Post Types to register and optionally Taxonomies.
 *
 * @url http://codex.wordpress.org/Function_Reference/register_post_type
 *
 * @name Team
 * @desc Custom post type for Team page.
 * @type Post
 * @var  team
 * @slug team
 * @meta
 */
$labels = array(
	'name' => __( 'Team Members' ),
	'singular_name' => __( 'Team Member' ),
	'all_items' => __( 'All Team Members' ),
	'add_new' => __( 'Add Team Member' ),
	'add_new_item' => __( 'Add New Team Member' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit Team Member' ),
	'new_item' => __( 'New Team Member' ),
	'view' => __( 'View Team Member' ),
	'view_item' => __( 'View Team Member' ),
	'search_items' => __( 'Search Team Members' ),
	'not_found' => __( 'No Team Members Found' ),
	'not_found_in_trash' => __( 'No Team Members Found in Trash' ),
	'parent' => __( 'Parent Team Member' ),
	'parent_item_colon' => '',
	'menu_name' => __( 'Team' )
);
$args = array(
	'labels' => $labels,
	'description' => __( 'Team custom post type.' ),
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
	'menu_icon' => 'dashicons-businessman',
	'supports' => array( 'title', 'editor', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'revisions' ),
	'taxonomies' => array( '' )
);
register_post_type( 'team', $args );

