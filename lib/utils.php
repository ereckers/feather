<?php
/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * This is BASIC title filtering. We rely on the plugin WordPress SEO for 
 * better and more advanced title handling.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function _s_wp_title( $title, $sep ) {
    // Add the blog name
    $title .= get_bloginfo( 'name', 'display' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title .= " $sep $site_description";
    }

    return $title;
}
add_filter( 'wp_title', '_s_wp_title', 10, 2 );

/*
 * Limit Number of Months in WordPress Archives Widget
 * http://wordpress.stackexchange.com/questions/19945/archive-widget-limit-number-of-months-to-12
 */
function feather_limit_archives_months( $args ) {
	$args['limit'] = ARCHIVE_WIDGET_LIMIT;
	return $args;
}
add_filter( 'widget_archives_args', 'feather_limit_archives_months' );

/**
 * strtolower WordPress SEO meta keywords
 */
function strtolower_wpseo_metakeywords( $content ) {
	return strtolower( $content );
}
add_filter('wpseo_metakeywords', 'strtolower_wpseo_metakeywords');

/**
 * ucwords Term titles
 */
function ucfirst_single_term_title( $content ) {
	return ucwords( $content );
}
//add_filter( 'single_term_title', 'ucfirst_single_term_title' );

/**
 * Get the parent slug/post_name
 */
function the_parent_slug() {
    global $post;
    if( $post->post_parent == 0 ) return '';
    $post_data = get_post( $post->post_parent );
    return $post_data->post_name;
}

/**
 * Get a clean URL for Featured Image that does not include height, width, etc..
 */
function get_clean_featured_image_url( $size = "thumbnail" ) {
	$featured_image_array = wp_get_attachment_image_src( get_post_thumbnail_id(), $size, true );
	return $featured_image_array[0];
}

/**
 * Wrap print_r in preformatted text tags
 *
 * @usage: print_pre($value)
 */
function print_pre($value) {
	echo "<pre>",print_r($value, true),"</pre>";
}

/**
 * Extras for wp_head
 */
function put_google_noarchive() {
	echo '<meta name="googlebot" content="noarchive">' . PHP_EOL;
}
//add_filter( 'wp_head', 'put_google_noarchive' );

/**
 * Simply print active template for debugging
 */
function show_active_template( $content ) {
    global $template;
    echo $template;
    return $content;
}
//add_filter( 'wp_head', 'show_active_template' );

?>
