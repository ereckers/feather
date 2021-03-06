<?php
/**
 * Page template without Bootstrap .container class. Does not print <h1>heading</h1>.
 *
 * @package Feather
 *
 * Template Name: Page Full Width
 */

get_header(); ?>

<div class="wrap" role="document">
	<?php get_template_part( 'template-parts/content', 'page' ); ?>
</div><!--/ .wrap .container -->

<?php get_footer(); ?>
