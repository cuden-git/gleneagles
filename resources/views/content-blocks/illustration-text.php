<?php
  $data = wp_parse_args($data['illustration-text']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $pre_heading = $data['pre_heading'];
  $heading = $data['heading'];
  $text = $data['text'];
  $flourish_url = $data['flourish']['url'];
  $image_url = $data['image']['url'];
  $image_alt = $data['image']['alt'];
  $button = $data['button'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-illustration-text cb-illustration-text--<?php echo esc_html($module_type); ?> cb-illustration-text--<?php echo esc_html($colour); ?>">
  <?php if( $module_type === 'type-one'){ ?>
    <div class="cb-illustration-text__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-flex flex-column align-items-center justify-content-start justify-content-md-center">
      <div class="cb-illustration-text--strip">
      <div class="cb-illustration-text__text-block">
        <?php if ($pre_heading): ?>
          <div class="cb-illustration-text__pre-heading">
            <span><?php echo esc_html($pre_heading); ?></span>
          </div>
        <?php endif; ?>
        <?php if ($heading): ?>
          <div class="cb-illustration-text__heading">
            <h2><?php echo esc_html($heading); ?></h2>
          </div>
        <?php endif; ?>
        <?php if ($flourish_url): ?>
          <div class="c-flourish" style="background-image: url(<?php echo esc_url($flourish_url); ?>);"></div>
        <?php endif; ?>
        <?php if ($image_url): ?>
          <div class="cb-illustration-text__image">
          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
          </div>
        <?php endif; ?>
        <?php if ($text): ?>
          <div class="cb-illustration-text__text">
            <p><?php echo esc_html($text); ?></p>
          </div>
        <?php endif; ?>
        <?php if ($button['button_link']) : ?>
          <?php App\Utilities\get_template_part('views/components/button', $button); ?>
        <?php endif; ?>
      </div>
    </div>
    </div>
  <?php } ?>
</section>
