<div class="entry-meta">
<span class="glyphicon glyphicon-time"></span> <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
<span class="glyphicon glyphicon-user"></span> <span class="byline author vcard"><?php echo __('By', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></span>
<span class="glyphicon glyphicon-pencil"></span> <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
</div>
