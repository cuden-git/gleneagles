<?php
/**
 * Template Name: Accommodation Hub
 *
 * Template Post Type: page
 */
?>
<!-- <?php the_title(); ?> - Accommodation Hub Template</h1> -->
<?php get_template_part('views/layouts/main-top'); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php

$data = get_fields();
$data = wp_parse_args( $data );

?>

<?php // Iterate through all content blocks on this page and output them?>
<?php if (isset($data['header'])) { ?>
  <?php foreach ($data['header'] as $content_block) { ?>
    <?php App\Utilities\get_template_part('views/content-blocks/' . strtr( $content_block['acf_fc_layout'], '_', '-'), $content_block ); ?>
  <?php } ?>
<?php } ?>

<?php get_template_part('views/partials/inpage-nav') ?>

<?php // Iterate through all content blocks on this page and output them?>
<?php if (isset($data['body'])) { ?>
  <?php foreach ($data['body'] as $content_block) { ?>
    <?php App\Utilities\get_template_part('views/content-blocks/' . strtr( $content_block['acf_fc_layout'], '_', '-'), $content_block ); ?>
  <?php } ?>
<?php } ?>
<?php endwhile; ?>
<?php get_template_part('views/layouts/main-bottom');
