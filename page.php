<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package feather
 */

get_header(); ?>

<div class="wrap container" role="document">
	<div class="content row">

		<aside class="sidebar col-sm-3" role="complementary">
			<?php get_sidebar( 'page' ); ?>
		</aside><!--/ .sidebar -->

		<main class="main col-sm-9" role="main">
			<?php get_template_part( 'templates/page', 'header' ); ?>
			<?php get_template_part( 'templates/content', 'page' ); ?>
		</main><!--/ .main -->

	</div><!--/ .content .row -->
</div><!--/ .wrap .container -->

<?php get_footer(); ?>
