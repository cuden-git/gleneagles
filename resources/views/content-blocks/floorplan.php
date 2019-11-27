<?php
  $data = wp_parse_args($data['floorplan']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-floorplan cb-floorplan--<?php echo esc_html($module_type); ?> cb-floorplan--<?php echo esc_html($colour); ?>">
  <?php if( $module_type === 'type-one'){ ?>
    <div class="cb-floorplan__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?>">
        <div class="cb-floorplan__pinchzoomer">
            <div data-elem="pinchzoomer" data-options="allowHoverZoom:true;">
              <img data-src="<?php App\Utilities\the_asset('images/floorplan.jpg'); ?>" alt="...">
            </div>
        </div>
        <p><span>Double click the floorplan to expand then click and</span><span>Pinch the floorplan to zoom in/out and touch to</span> drag the image</p>
    </div>
  <?php } ?>
</section>
