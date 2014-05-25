<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Feather
 */

get_header(); ?>

<div class="wrap container" role="document">
	<div class="content row">
		<main class="main col-sm-8" role="main">

		<?php if ( ! have_posts() ) : ?>
			<div class="alert alert-warning">
				<?php _e( 'Sorry, no results were found.', THEME_TEXTDOMAIN ); ?>
			</div>
			<?php get_search_form(); ?>
		<?php endif; ?>

		<?php if ( have_posts() ) : ?>
			<?php get_template_part( 'templates/page', 'header' ); ?>
		<?php endif; ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'templates/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php get_template_part( 'templates/pagination' ); ?>

		</main><!--/ .main -->

		<aside class="sidebar col-sm-4" role="complementary">
			<?php get_sidebar(); ?>
		</aside><!--/ .sidebar -->

	</div><!--/ .content .row -->
</div><!--/ .wrap .container -->

<?php get_footer(); ?>
