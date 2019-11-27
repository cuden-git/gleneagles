<?php get_template_part('views/layouts/main-top'); ?>
<?php get_template_part('views/partials/page-header'); ?>

  <?php if (! have_posts()) : ?>
    <div class="alert alert-warning">Sorry the page you were trying to view does not exist</div>

    <?php get_search_form(false); ?>
  <?php endif; ?>

<?php get_template_part('views/layouts/main-bottom'); ?>
