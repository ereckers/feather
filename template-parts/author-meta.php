<?php if ( get_the_author_meta( 'description' ) ) : ?>
<div class="author-description">
	<div class="media">
		<a class="pull-left" href="<?php the_author_meta( 'user_url', get_the_author_meta( 'ID' ) ); ?> ">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
		</a>
		<div class="media-body">
			<h4 class="media-heading">
				<?php if ( is_single( $post ) ) : ?>
					Post written by 
				<?php endif; ?>
				<?php the_author_meta( 'display_name' ); ?>
			</h4>
			<?php the_author_meta( 'description' ); ?>
		</div>
	</div>
</div>
<?php endif; ?>
