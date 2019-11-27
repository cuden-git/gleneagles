<?php
  $data = wp_parse_args($data['section-header']);
  $module_type = $data['type'];
  $text_colour = $data['text_colour'];
  $background_colour = $data['background_colour'];
  $pre_heading = $data['pre_heading'];
  $heading = $data['heading'];
  $text = $data['text'];
  $flourish_url = $data['flourish']['url'];
  $button = $data['button'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-section-header cb-section-header--<?php echo esc_html($module_type); ?> cb-section-header--<?php echo esc_html($text_colour); ?>" style="background: <?php echo esc_html($background_colour); ?>;">
  <?php if( $module_type === 'type-one'){ ?>
    <div class="cb-section-header__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-flex flex-column align-items-center justify-content-start justify-content-md-center">
      <div class="cb-section-header__text-block">
      <?php if ($pre_heading): ?>
          <div class="cb-section-header__pre-heading">
            <span><?php echo esc_html($pre_heading); ?></span>
          </div>
        <?php endif; ?>
        <?php if ($heading): ?>
          <div class="cb-section-header__heading">
            <h2><?php echo esc_html($heading); ?></h2>
          </div>
        <?php endif; ?>
        <?php if ($flourish_url): ?>
          <div class="c-flourish" style="background-image: url(<?php echo esc_url($flourish_url); ?>);"></div>
        <?php endif; ?>
        <?php if ($text): ?>
          <div class="cb-section-header__text">
            <p><?php echo esc_html($text); ?></p>
          </div>
        <?php endif; ?>
        <?php if ($button['button_link']) : ?>
          <?php App\Utilities\get_template_part('views/components/button', $button); ?>
        <?php endif; ?>
      </div>
    </div>
  <?php } ?>
</section>
