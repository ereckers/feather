<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-info">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
			<p>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', '_s' ) ); ?>"><?php printf( __( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'feather' ), '<a href="https://www.github.org/ereckers/feather/">Feather</a>', '<a href="http://www.redbridgenet.com/" rel="designer">Red Bridge Internet</a>' ); ?>
			<p>
		</div><!-- .site-info -->
	</div><!-- .container -->
</footer><!-- #colophon .site-footer -->
