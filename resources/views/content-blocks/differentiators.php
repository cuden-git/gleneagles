<?php
  $data = wp_parse_args($data['differentiators']);
  $module_type = $data['type'];
  $text_colour = $data['text_colour'];
  $background_colour = $data['background_colour'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $details = $data['details'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-differentiators cb-differentiators--<?php echo esc_html($module_type); ?> cb-differentiators--<?php echo esc_html($text_colour); ?>" style="background: <?php echo esc_html($background_colour); ?>;">
  <?php if( $module_type === 'type-one'){ ?>
    <div class="cb-differentiators__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-flex align-items-center">
      <div class="cb-differentiators__text-block">
        <?php if ($details): ?>
        <?php foreach ($details as $detail) { ?>

        <div class="details">
            <div class="title"><?php echo esc_html($detail['heading']) ?></div>
          <span><?php echo esc_html($detail['text']) ?></span>
        </div>

        <?php } ?>
        <?php endif; ?>
      </div>
    </div>
  <?php } ?>
</section>
