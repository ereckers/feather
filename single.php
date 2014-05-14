<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Feather
 */

get_header(); ?>

<div class="wrap container" role="document">
	<div class="content row">

		<main class="main col-sm-8" role="main">
			<?php get_template_part( 'templates/content', 'single' ); ?>
		</main><!--/ .main -->

		<aside class="sidebar col-sm-4" role="complementary">
			<?php get_sidebar(); ?>
		</aside><!--/ .sidebar -->

	</div><!--/ .content .row -->
</div><!--/ .wrap .container -->

<?php get_footer(); ?>
