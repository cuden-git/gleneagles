<time class="updated" datetime="<?php get_post_time('c', true); ?>"><?php echo get_the_date(); ?></time>

<p class="byline author vcard">
  <?php echo esc_html( __('By', 'sage') ); ?> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author" class="fn">
    <?php echo esc_html( get_the_author() ); ?>
  </a>
</p>
