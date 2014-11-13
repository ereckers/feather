<?php
/**
 * Single column page template within container without sidebars.
 *
 * @package Feather
 *
 * Template Name: Page Single Column
 */

get_header(); ?>

<div class="wrap container" role="document">
	<div class="content row">

		<main class="main col-sm-12" role="main">
			<?php get_template_part( 'template-parts/page', 'header' ); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
		</main><!--/ .main -->

	</div><!--/ .content .row -->
</div><!--/ .wrap .container -->

<?php get_footer(); ?>
