<?php
  $data = wp_parse_args($data['link-list']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $pre_heading = $data['pre_heading'];
  $heading = $data['heading'];
  $text = $data['text'];
  $links = $data['links'];
  $image_url = $data['image']['url'];
  $image_alt = $data['image']['alt'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-link-list cb-link-list--<?php echo esc_html($module_type); ?> cb-link-list--<?php echo esc_html($colour); ?>">
    <?php if( $module_type === 'type-one'){ ?>
    <div class="cb-link-list__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?>">
        <div class="cb-link-list__block">
            <div class='cb-link-list__left'>
                <div class="cb-link-list__details">
                    <?php if ($pre_heading): ?>
                    <div class="cb-link-list__pre-heading">
                        <span><?php echo esc_html($pre_heading); ?></span>
                    </div>

                    <?php endif; ?>
                    <?php if ($heading): ?>
                    <div class="cb-link-list__heading">
                        <h2><?php echo esc_html($heading); ?></h2>
                    </div>
                    <?php endif; ?>
                    <?php if ($text): ?>
                    <div class="cb-link-list__text">
                        <p><?php echo esc_html($text); ?></p>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="cb-link-list__nav">
                    <?php if ($links): ?>
                    <div class="cb-link-list__selections">
                        <ul><?php foreach ($links as $link_list) { ?>
                            <li>
                                <a href="<?php echo esc_url($link_list['link']['url']) ?>" target="<?php echo esc_attr($link_list['link']['target']) ?>"><?php echo esc_html($link_list['link']['title']) ?></a>
                                <?php if ($link_list['description']): ?>
                                    <div class="cb-link-list__link-description">
                                        <p><?php echo esc_html($link_list['description']); ?></p>
                                    </div>
                                <?php endif; ?>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php if ($image_url): ?>
            <div class="cb-link-list__image">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>"
                    alt="<?php echo esc_attr($image_alt); ?>">
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php } ?>
</section>