<?php get_template_part('views/layouts/main-top'); ?>

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('partials.content-single-'.get_post_type()); ?>
  <?php endwhile; ?>

<?php get_template_part('views/layouts/main-bottom'); 
