<?php
  $data = wp_parse_args($data['filter']);
  $module_type = $data['type'];
  $text_colour = $data['text_colour'];
  $background_colour = $data['background_colour'];
  $heading = $data['heading'];
  $text = $data['text'];
  $flourish_url = $data['flourish']['url'];
  $button = $data['button'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $filters = $data['filters'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-filter cb-filter--<?php echo esc_html($module_type); ?> cb-filter--<?php echo esc_html($text_colour); ?>" style="background: <?php echo esc_html($background_colour); ?>;">
  <?php if( $module_type === 'type-one'){ ?>
    <div class="cb-filter__underlay" style="background: <?php echo esc_html($background_colour); ?>;"></div>
    <div class="cb-filter__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-flex flex-column align-items-center justify-content-start justify-content-md-center">
      <div class="cb-filter__text-block">
        <?php if ($heading): ?>
          <div class="cb-filter__heading">
            <h3><?php echo esc_html($heading); ?></h3>
          </div>
        <?php endif; ?>
        <?php if ($flourish_url): ?>
          <div class="c-flourish" style="background-image: url(<?php echo esc_url($flourish_url); ?>);"></div>
        <?php endif; ?>
        <?php if ($filters): ?>
        <ul>
          <?php $i = 0; ?>
          <?php  $filter_ids_all = [];  ?>
          
          <?php foreach ($filters as $filter) { ?>
            <?php 
              ${'filter_show_ids_' . $i} = array_column($filter['section_ids'], 'section_id');
              $filter_ids_all = array_merge($filter_ids_all, ${'filter_show_ids_' . $i});
              echo '<script>var filter_show_ids_'.$i.' = '.json_encode(${'filter_show_ids_' . $i}).';</script>';
            ?> 
          <li tabindex="0" data-show-ids="<?php echo 'filter_show_ids_'.$i; ?>"><span><?php echo esc_html($filter['description']) ?></span><br><div><?php echo esc_html($filter['name']) ?></div></li>
            <?php $i++; ?>
          <?php } ?>
          <?php 
              echo '<script>var filter_ids_all = '.json_encode($filter_ids_all).';</script>';
            ?> 
        </ul>
        <?php endif; ?>
        <?php if ($text): ?>
          <div class="cb-filter__text">
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
