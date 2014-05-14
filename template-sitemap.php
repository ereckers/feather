<?php
/**
 * Generates a full sitemap page.
 *
 * @package feather
 *
 * Template Name: Sitemap
 */

get_header(); ?>

<div class="wrap container" role="document">

	<?php get_template_part( 'templates/page', 'header' ); ?>

	<div class="content row">

		<div class="col-sm-6">

			<h2><?php _e( 'Feeds' ); ?></h2>

			<ul class="xoxo feeds">
				<li><a href="<?php bloginfo( 'rdf_url' ); ?>" title="<?php esc_attr_e( 'RDF/RSS 1.0 feed' ); ?>"><?php _e( '<acronym title="Resource Description Framework">RDF</acronym> <acronym title="Really Simple Syndication">RSS</acronym> 1.0 feed' ); ?></a></li>
				<li><a href="<?php bloginfo( 'rss_url' ); ?>" title="<?php esc_attr_e( 'RSS 0.92 feed' ); ?>"><?php _e( '<acronym title="Really Simple Syndication">RSS</acronym> 0.92 feed' ); ?></a></li>
				<li><a href="<?php bloginfo( 'rss2_url' ); ?>" title="<?php esc_attr_e( 'RSS 2.0 feed' ); ?>"><?php _e( '<acronym title="Really Simple Syndication">RSS</acronym> 2.0 feed' ); ?></a></li>
				<li><a href="<?php bloginfo( 'atom_url' ); ?>" title="<?php esc_attr_e( 'Atom feed' ); ?>"><?php _e( 'Atom feed' ); ?></a></li>
				<li><a href="<?php bloginfo( 'comments_rss2_url' ); ?>" title="<?php esc_attr_e( 'Comments RSS 2.0 feed' ); ?>"><?php _e( 'Comments <acronym title="Really Simple Syndication">RSS</acronym> 2.0 feed' ); ?></a></li>
			</ul><!-- .xoxo .feeds -->


			<h2><?php _e( 'Pages' ); ?></h2>

			<ul class="xoxo pages">
				<?php wp_list_pages( array( 'title_li' => false ) ); ?>
			</ul><!-- .xoxo .pages -->

			<h2><?php _e( 'Category Archives' ); ?></h2>

			<ul class="xoxo category-archives">
				<?php wp_list_categories( array( 'feed' => __( 'RSS' ), 'show_count' => true, 'use_desc_for_title' => false, 'title_li' => false ) ); ?>
			</ul><!-- .xoxo .category-archives -->

			<h2><?php _e( 'Tag Archives' ); ?></h2>

			<p class="tag-cloud">
				<?php wp_tag_cloud( array( 'number' => 0 ) ); ?>
			</p><!-- .tag-cloud -->

			<h2><?php _e( 'Author Archives' ); ?></h2>

			<ul class="xoxo author-archives">
				<?php wp_list_authors( array( 'exclude_admin' => false, 'show_fullname' => true, 'feed' => __( 'RSS' ), 'optioncount' => true, 'title_li' => false ) ); ?>
			</ul><!-- .xoxo .author-archives -->

			<h2><?php _e( 'Yearly Archives' ); ?></h2>

			<ul class="xoxo yearly-archives">
				<?php wp_get_archives( array( 'type' => 'yearly', 'show_post_count' => true ) ); ?>
			</ul><!-- .xoxo .yearly-archives -->

			<h2><?php _e( 'Monthly Archives' ); ?></h2>

			<ul class="xoxo monthly-archives">
				<?php wp_get_archives( array( 'type' => 'monthly', 'show_post_count' => true ) ); ?>
			</ul><!-- .xoxo .monthly-archives -->

		</div>
		<div class="col-sm-6">

				<h2><?php _e( 'Blog Posts' ); ?></h2>

				<ul class="xoxo post-archives">
					<?php wp_get_archives( array( 'type' => 'postbypost' ) ); ?>
				</ul><!-- .xoxo .post-archives -->

		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">

				<h2><?php _e( 'Weekly Archives' ); ?></h2>

				<ul class="xoxo weekly-archives">
					<?php wp_get_archives( array( 'type' => 'weekly', 'show_post_count' => true ) ); ?>
				</ul><!-- .xoxo .weekly-archives -->

		</div>
		<div class="col-sm-6">

				<h2><?php _e( 'Daily Archives' ); ?></h2>

				<ul class="xoxo daily-archives">
					<?php wp_get_archives( array( 'type' => 'daily', 'show_post_count' => true ) ); ?>
				</ul><!-- .xoxo .daily-archives -->

		</div>
	</div>

	</div><!--/ .content .row -->
</div><!--/ .wrap .container -->

<?php get_footer(); ?>
