		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			<nav class="post-nav">
				<ul class="pager">
					<li class="previous"><?php next_posts_link( __( '&larr; Older posts', THEME_TEXTDOMAIN ) ); ?></li>
					<li class="next"><?php previous_posts_link( __( 'Newer posts &rarr;', THEME_TEXTDOMAIN ) ); ?></li>
				</ul>
			</nav>
		<?php endif; ?>
