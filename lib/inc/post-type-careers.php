<?php 
/**
 * Setup Custom Post Types to register and optionally Taxonomies.
 *
 * @url http://codex.wordpress.org/Function_Reference/register_post_type
 * @url http://codex.wordpress.org/Function_Reference/register_taxonomy
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

/*
 * @name Types
 * @desc This is a taxonomy for Career Types
 * @type Taxonomy, Not Heirarchical (like tags)
 * @var  career_types
 * @slug career-types
 */
$labels = array(
    'name' => __( 'Types' ),
    'singular_name' => __( 'Type' ),
    'search_items' => __( 'Search Types' ),
    'popular_items' => __( 'Popular Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __('Edit Type'),
    'update_item' => __('Update Type'),
    'add_new_item' => __('Add New Type'),
    'new_item_name' => __('New Type'),
    'menu_name' => __('Types')
);
$args = array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'career-types' )
);
register_taxonomy( 'types', array('careers'), $args );

