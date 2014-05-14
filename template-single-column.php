<?php
/**
 * Single column page template without sidebars.
 *
 * @package feather
 *
 * Template Name: Single Column Page
 */

get_header(); ?>

<div class="wrap container" role="document">
	<div class="content row">

		<main class="main col-sm-12" role="main">
			<?php get_template_part( 'templates/page', 'header' ); ?>
			<?php get_template_part( 'templates/content', 'page' ); ?>
		</main><!--/ .main -->

	</div><!--/ .content .row -->
</div><!--/ .wrap .container -->

<?php get_footer(); ?>
