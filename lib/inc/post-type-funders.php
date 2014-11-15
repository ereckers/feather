<?php 
/**
 * Setup Custom Post Types to register and optionally Taxonomies.
 *
 * @name Funders
 * @desc Custom post type for Job Descriptions on Funders page.
 * @type Post
 * @var  careers
 * @slug careers
 * @meta
 */
$labels = array(
	'name' => __( 'Funders' ),
	'singular_name' => __( 'Funder' ),
	'all_items' => __( 'All Funders' ),
	'add_new' => __( 'Add Funder' ),
	'add_new_item' => __( 'Add New Funder' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit Funder' ),
	'new_item' => __( 'New Funder' ),
	'view' => __( 'View Funder' ),
	'view_item' => __( 'View Funder' ),
	'search_items' => __( 'Search Funders' ),
	'not_found' => __( 'No Funders Found' ),
	'not_found_in_trash' => __( 'No Funders Found in Trash' ),
	'parent' => __( 'Parent Funder' ),
	'parent_item_colon' => '',
	'menu_name' => __( 'Funders' )
);
$args = array(
	'labels' => $labels,
	'description' => __( 'Funders custom post type.' ),
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'funders', 'with_front' => false ),
	'capability_type' => 'post',
	'hierarchical' => false,
	'has_archive' => false,
	'menu_position' => 25,
	'menu_icon' => 'dashicons-star-filled',
	'supports' => array( 'title', 'editor', 'author', 'excerpt', 'page-attributes', 'revisions' ),
	'taxonomies' => array( '' )
);
register_post_type( 'funders', $args );

