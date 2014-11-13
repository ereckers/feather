<?php
/**
 * Page template with 2 columns. Nav column left and content right.
 *
 * @package Feather
 *
 * Template Name: Page 2 Column Left
 */

get_header(); ?>

<div class="wrap container" role="document">
	<div class="content row">

		<aside class="sidebar col-sm-3" role="complementary">
			<?php get_sidebar( 'page' ); ?>
		</aside><!--/ .sidebar -->

		<main class="main col-sm-9" role="main">
			<?php get_template_part( 'template-parts/page', 'header' ); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
		</main><!--/ .main -->

	</div><!--/ .content .row -->
</div><!--/ .wrap .container -->

<?php get_footer(); ?>
