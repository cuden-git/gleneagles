<h1><?php the_title(); ?></h1>
<?php get_template_part('views/layouts/main-top'); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('views/partials/page-header'); ?>
  <?php get_template_part('views/partials/content-page'); ?>
<?php endwhile;?>
<?php get_template_part('views/layouts/main-bottom');
