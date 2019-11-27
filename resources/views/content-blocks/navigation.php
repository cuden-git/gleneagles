<?php
  $data = wp_parse_args($data['navigation']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $links = $data['links'];
  $geo_targeting = $data['geo-targeting'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-navigation cb-navigation--<?php echo esc_html($module_type); ?> cb-navigation--<?php echo esc_html($colour); ?> geo-targeting geo-targeting--<?php echo esc_html($geo_targeting); ?>">
  <?php if( $module_type === 'type-one'){ ?>
    <div class="cb-navigation__container">
      <div class="cb-navigation__links">
      <?php if ($links): ?>
        <?php foreach ($links as $link) { ?>
          <a class="scroll-link" href="#<?php echo esc_html($link['section_id']) ?>"><?php echo esc_html($link['section_name']) ?></a>
        <?php } ?>
      <?php endif; ?>
      </div>
    </div>
  <?php } ?>
</section>
