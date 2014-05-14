<?php
/**
 * Page template without Bootstrap .container class. Also does not print <h1>heading</h1>.
 *
 * @package feather
 *
 * Template Name: No Container Page
 */

get_header(); ?>

<div class="wrap" role="document">
	<?php get_template_part( 'templates/content', 'page' ); ?>
</div><!--/ .wrap .container -->

<?php get_footer(); ?>
