<?php
/**
 * Allow Text Widgets to execute shortcodes
 */
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Register widget areas.
 *
 * @return void
 */
function feather_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', THEME_TEXTDOMAIN ),
		'id'            => 'sidebar-primary',
		'description'   => __( 'Sidebar for default/blog templates.', THEME_TEXTDOMAIN ),
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', THEME_TEXTDOMAIN ),
		'id'            => 'sidebar-page',
		'description'   => __( 'Sidebar for 2 column page templates.', THEME_TEXTDOMAIN ),
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'feather_theme_widgets_init' );
?>
