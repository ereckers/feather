<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-info">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
			<p>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', THEME_TEXTDOMAIN ) ); ?>"><?php printf( __( 'Proudly powered by %s', THEME_TEXTDOMAIN ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', THEME_TEXTDOMAIN ), '<a href="https://github.com/ereckers/feather">Feather</a>', '<a href="http://www.redbridgenet.com/" rel="designer">Red Bridge Internet</a>' ); ?>
			<p>
		</div><!-- .site-info -->
	</div><!-- .container -->
</footer><!-- #colophon .site-footer -->
