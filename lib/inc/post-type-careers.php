<?php 
/**
 * Setup Custom Post Types to register and optionally Taxonomies.
 *
 * @url http://codex.wordpress.org/Function_Reference/register_post_type
 *
 * @name Careers
 * @desc Custom post type for Job Descriptions on Careers page.
 * @type Post
 * @var  careers
 * @slug careers
 * @meta
 */
$labels = array(
	'name' => __( 'Careers' ),
	'singular_name' => __( 'Career' ),
	'all_items' => __( 'All Careers' ),
	'add_new' => __( 'Add Career' ),
	'add_new_item' => __( 'Add New Career' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit Career' ),
	'new_item' => __( 'New Career' ),
	'view' => __( 'View Career' ),
	'view_item' => __( 'View Career' ),
	'search_items' => __( 'Search Careers' ),
	'not_found' => __( 'No Careers Found' ),
	'not_found_in_trash' => __( 'No Careers Found in Trash' ),
	'parent' => __( 'Parent Career' ),
	'parent_item_colon' => '',
	'menu_name' => __( 'Careers' )
);
$args = array(
	'labels' => $labels,
	'description' => __( 'Careers custom post type.' ),
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'careers', 'with_front' => false ),
	'capability_type' => 'post',
	'hierarchical' => false,
	'has_archive' => false,
	'menu_position' => 25,
	'menu_icon' => 'dashicons-portfolio',
	'supports' => array( 'title', 'editor', 'author', 'excerpt', 'page-attributes', 'revisions' ),
	'taxonomies' => array( '' )
);
register_post_type( 'careers', $args );

