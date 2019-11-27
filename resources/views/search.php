<?php get_template_part('views/layouts/main-top'); ?>
<?php get_template_part('views/partials/page-header'); ?>
<?php global $wp_query; 
  $wp_query->set('posts_per_page', 3);
  $wp_query->query($wp_query->query_vars);
?>
<section class="search-results">
  <div class="search-results__container">
    <div class="mobile-site-search">
      <form class="site-search__form" action="<?php echo esc_attr(home_url('/')); ?>" autocomplete="off">
          <label>
              <input type="text" name="s">
          </label>
          <input type="submit" value="">
          <div class="site-search__results"></div>
      </form>
    </div>
    <div id="search-results-stage" class="search-results__stage">
      <?php if (! have_posts()) : ?>
        <div class="alert alert-warning">
          <?php echo esc_html( __('Sorry, no results were found.', 'sage') ); ?>
        </div>
      <?php endif; ?>
      <h2><?php echo esc_html($wp_query->found_posts) ?> results found for search term: <?php echo get_search_query(); ?></h2>
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('views/partials/content-search'); ?>
      <?php endwhile; ?>
    </div>
    <a href="#" title="Load more" class="search-results__load-more"
      data-search-offset="0"
      data-search-found="<?php echo esc_attr($wp_query->found_posts) ?>"
      data-search-term="<?php echo get_search_query(); ?>" 
      data-search-load-more>
      Load more
    </a>
  </div>
</section>
  <?php get_the_posts_navigation(); ?>
<?php get_template_part('views/layouts/main-bottom'); ?>
