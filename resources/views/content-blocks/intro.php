<?php
  $data = wp_parse_args($data['intro']);
  $module_type = $data['type'];
  $text_colour = $data['text_colour'];
  $background_colour = $data['background_colour'];
  $heading = $data['heading'];
  $text = $data['text'];
  $flourish_url = $data['flourish']['url'];
  $button = $data['button'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-intro cb-intro--<?php echo esc_html($module_type); ?> cb-intro--<?php echo esc_html($text_colour); ?>" style="background: <?php echo esc_html($background_colour); ?>;">
  <?php if( $module_type === 'type-one'){ ?>
    <div class="cb-intro__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-flex flex-column align-items-center justify-content-start justify-content-md-center">
      <div class="cb-intro__text-block">
        <?php if ($heading): ?>
          <div class="cb-intro__heading">
            <h2><?php echo esc_html($heading); ?></h2>
          </div>
        <?php endif; ?>
        <?php if (($flourish_url) && ($button['button_link'])): ?>
          <div class="c-flourish" style="background-image: url(<?php echo esc_url($flourish_url); ?>);"></div>
        <?php endif; ?>
        <?php if ($text): ?>
          <div class="cb-intro__text">
            <p><?php echo esc_html($text); ?></p>
          </div>
        <?php endif; ?>
        <?php if ($button['button_link']) : ?>
          <?php App\Utilities\get_template_part('views/components/button', $button); ?>
        <?php endif; ?>
        <?php if (($flourish_url) && !($button['button_link'])): ?>
          <div class="c-flourish" style="background-image: url(<?php echo esc_url($flourish_url); ?>);"></div>
        <?php endif; ?>
      </div>
    </div>
  <?php } ?>
</section>
