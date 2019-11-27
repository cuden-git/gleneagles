<?php
  $data = wp_parse_args($data['framed-text']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $background_colour = $data['background_colour'];
  $heading = $data['heading'];
  $text = $data['text'];
  $button = $data['button'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $section_id = $data['section_id'];
  // print_r($data);
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-framed-text cb-framed-text--<?php echo esc_html($module_type); ?> cb-framed-text--<?php echo esc_html($colour); ?>" style="background: <?php echo esc_html($background_colour); ?>;">
  <?php if( $module_type === 'type-one'){ ?>
    <div class="cb-framed-text__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-flex flex-column align-items-center justify-content-start justify-content-md-center">
      <div class="cb-framed-text__border">
        <div class="cb-framed-text__inner">
          <div class="cb-framed-text__text-block">
            <?php if ($heading): ?>
              <div class="cb-framed-text__heading">
                <h3><?php echo esc_html($heading); ?></h3>
              </div>
            <?php endif; ?>
            <?php if ($text): ?>
              <div class="cb-framed-text__text">
                <p><?php echo esc_html($text); ?></p>
              </div>
            <?php endif; ?>
            <?php if ($button['button_link']) : ?>
              <?php App\Utilities\get_template_part('views/components/button', $button); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</section>
