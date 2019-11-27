<?php
  $data = wp_parse_args($data['table']);
  $module_type = $data['type'];
  $text_colour = $data['text-colour'];
  $background_colour = $data['background-colour'];
  $heading = $data['heading'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $details = $data['details'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-table cb-table--<?php echo esc_html($module_type); ?> cb-table--<?php echo esc_html($text_colour); ?>" style="background: <?php echo esc_html($background_colour); ?>;">
  <?php if( $module_type === 'type-one'){ ?>
    <div class="cb-table__container cb-table__container--columns-<?php echo esc_html(count($details)); ?> align-items-center justify-content-md-center cb-table__container--columns-<?php echo esc_html(count($details)); ?>">
      <div class="cb-table__text-block">
        <?php if ($heading): ?>
          <div class="cb-table__heading">
            <h5><?php echo esc_html($heading); ?></h5>
          </div>
        <?php endif; ?>
      </div>
      <div class="cb-table__table-block cb-table__table-block--columns-<?php echo esc_html(count($details)); ?>">
        <?php if ($details): ?>
        <?php foreach ($details as $detail) { ?>
        <div class="cb-table__table-column">
          <div class="title">
            <?php if( $detail['pre_heading'] ){ ?>
              <span class="pre_heading"><?php echo esc_html($detail['pre_heading']) ?></span>
            <?php } ?>
            <?php if( $detail['heading'] ){ ?>
              <span class="heading"><?php echo esc_html($detail['heading']) ?></span>
            <?php } ?>
          </div>
          <div class="text">
            <span><?php echo esc_html($detail['text']) ?><span>
          </div>
        </div>
        <?php } ?>
        <?php endif; ?>
      </div>
    </div>
  <?php } ?>
</section>
