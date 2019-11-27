<?php
  $allowed_html = [
    'br'     => [],
    'strong' => [],
    'br'     => [],
    'ul'     => [],
    'li' => [],
    'p' => array(
        'class' => array()
    ),
  ];  
  $data = wp_parse_args($data['image-text']);
  $module_type = $data['type'];
  $text_colour = $data['text_colour'];
  $background_colour = $data['background_colour'];
  $pre_heading = $data['pre_heading'];
  $heading = $data['heading'];
  $text = $data['text'];
  $button = $data['button'];
  $image_url = $data['image']['url'];
  $image_alt = $data['image']['alt'];
  $alternative_layout = $data['alternative_layout'];
  if($alternative_layout){
    $alternative_layout = 'alternative-layout';
  }
  $full_bleed_image = $data['full_bleed_image'];
  if($full_bleed_image){
    $full_bleed_image = 'full-bleed-image';
  }
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $geo_targeting = $data['geo-targeting'];
  $section_id = $data['section_id'];
  // $navigation_name = $data['navigation']['section_name'];
  $image_tertiary_url = $data['image_tertiary']['url'];
  $image_tertiary_alt = $data['image_tertiary']['alt'];
  $image_secondary_url = $data['image_secondary']['url'];
  $image_secondary_alt = $data['image_secondary']['alt'];
  $image_four_url = $data['image_four']['url'];
  $image_four_alt = $data['image_four']['alt'];
  $details = $data['details'];
  $video_url = $data['video']['url'];
  $flourish_url = $data['flourish']['url'];
  $full_bleed_image = $data['full_bleed_image'];
  if($flourish_url){
    $flourish_layout = 'flourish-layout';
  }
?>
<section id="<?php echo esc_attr($section_id); ?>"
    class="cb-image-text cb-image-text--<?php echo esc_html($module_type); ?> cb-image-text--<?php echo esc_html($alternative_layout); ?> cb-image-text--<?php echo esc_html($text_colour); ?> cb-image-text--<?php echo esc_html($flourish_layout); ?> geo-targeting geo-targeting--<?php echo esc_html($geo_targeting); ?>" style="background: <?php echo esc_html($background_colour); ?>;">
    <?php if( $module_type === 'type-one'){ ?>
    <div
        class="cb-image-text__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-md-flex align-items-center justify-content-between">
        <div class="cb-image-text__text-block">
            <?php if ($pre_heading): ?>
            <div class="cb-image-text__pre-heading">
                <span><?php echo esc_html($pre_heading); ?></span>
            </div>
            <?php endif; ?>
            <?php if ($heading): ?>
            <div class="cb-image-text__heading">
                <h2><?php echo esc_html($heading); ?></h2>
            </div>
            <?php endif; ?>
            <?php if ($image_url): ?>
            <div class="cb-image-text__image">
                <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_url); ?>"
                    alt="<?php echo esc_attr($image_alt); ?>">
            </div>
            <?php endif; ?>
            <?php if ($text): ?>
            <div class="cb-image-text__text">
                <?php echo wp_kses($text, $allowed_html ); ?>
            </div>
            <?php endif; ?>
            <?php if ($button['button_link']) : ?>
            <?php App\Utilities\get_template_part('views/components/button', $button); ?>
            <?php endif; ?>
        </div>
        <div class="cb-image-text__image-block">
            <?php if ($image_url): ?>
            <div class="cb-image-text__image">
                <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_url); ?>"
                    alt="<?php echo esc_attr($image_alt); ?>">
                <img class="img-placeholder" src="//via.placeholder.com/600x750">
            </div>
            <?php endif; ?>
        </div>
        <?php if ($flourish_url): ?>
          <div class="c-flourish" style="background-image: url(<?php echo esc_url($flourish_url); ?>);"></div>
        <?php endif; ?>
    </div>
    <?php } else if( $module_type === 'type-two'){ ?>
    <div
        class="cb-image-text__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-md-flex align-items-center justify-content-between">
        <div class="cb-image-text__text-block">
            <?php if ($image_url): ?>
            <div class="cb-image-text__image">
                <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_url); ?>"
                    alt="<?php echo esc_attr($image_alt); ?>">
            </div>
            <?php endif; ?>
            <?php if ($pre_heading): ?>
            <div class="cb-image-text__pre-heading">
                <span><?php echo esc_html($pre_heading); ?></span>
            </div>
            <?php endif; ?>
            <?php if ($heading): ?>
            <div class="cb-image-text__heading">
                <h2><?php echo esc_html($heading); ?></h2>
            </div>
            <?php endif; ?>
            <?php if ($text): ?>
            <div class="cb-image-text__text">
                <?php echo wp_kses($text, $allowed_html ); ?>
            </div>
            <?php endif; ?>
            <?php if ($button['button_link']) : ?>
            <?php App\Utilities\get_template_part('views/components/button', $button); ?>
            <?php endif; ?>
        </div>
        <div class="cb-image-text__image-block">
            <?php if ($image_url): ?>
            <div class="cb-image-text__image">
                <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_url); ?>"
                    alt="<?php echo esc_attr($image_alt); ?>">
                <img class="img-placeholder" src="//via.placeholder.com/600x750">
            </div>
            <?php endif; ?>
        </div>
    
        <?php if ($flourish_url): ?>
          <div class="c-flourish" style="background-image: url(<?php echo esc_url($flourish_url); ?>);"></div>
        <?php endif; ?>
    </div>
    <?php } else if( $module_type === 'type-three'){ ?>
    <div
        class="cb-image-text__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-md-flex align-items-center justify-content-between cb-image-text--<?php if ($image_secondary_url) {echo "extra-image";} ?>">
        <div class="cb-image-text__text-block">
            <?php if ($image_type_three_url): ?>
            <div class="cb-image-text__image">
                <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_type_three_url); ?>"
                    alt="<?php echo esc_attr($image_type_three_alt); ?>">
            </div>
            <?php endif; ?>
            <?php if ($pre_heading): ?>
            <div class="cb-image-text__pre-heading">
                <span><?php echo esc_html($pre_heading); ?></span>
            </div>
            <?php endif; ?>
            <?php if ($heading): ?>
            <div class="cb-image-text__heading">
                <h3><?php echo esc_html($heading); ?></h3>
            </div>
            <?php endif; ?>
            <?php if ($text): ?>
            <div class="cb-image-text__text">
                <?php echo wp_kses($text, $allowed_html ); ?>
            </div>
            <?php endif; ?>
            <?php if ($details): ?>
            <div class="cb-image-text__details-block">
                <?php foreach ($details as $detail) { ?>
                <div class="cb-image-text__detail">
                    <div class="cb-image-text__detail-heading"><?php echo esc_html($detail['heading']) ?></div>
                    <div class="cb-image-text__detail-text"><?php echo esc_html($detail['text']) ?></div>
                </div>
                <?php } ?>
            </div>
            <?php endif; ?>

        </div>
        <div class="cb-image-text__image-block">
            <?php if ($image_tertiary_url): ?>
            <div class="cb-image-text__image">
                <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_tertiary_url); ?>"
                    alt="<?php echo esc_attr($image_tertiary_alt); ?>">
                <img class="img-placeholder" src="//via.placeholder.com/470x340">
            </div>
            <?php endif; ?>
        </div>
        <?php if ($image_secondary_url): ?>
        <div class="cb-image-text__image-secondary">
            <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_secondary_url); ?>"
                alt="<?php echo esc_attr($image_secondary_alt); ?>">
        </div>
        <?php endif; ?>
    
        <?php if ($flourish_url): ?>
          <div class="c-flourish" style="background-image: url(<?php echo esc_url($flourish_url); ?>);"></div>
        <?php endif; ?>
    </div>
    <?php } if( $module_type === 'type-four'){ ?>
    <div
        class="cb-image-text__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-md-flex align-items-center justify-content-between">
        <div class="cb-image-text__text-block">
            <?php if ($pre_heading): ?>
            <div class="cb-image-text__pre-heading">
                <span><?php echo esc_html($pre_heading); ?></span>
            </div>
            <?php endif; ?>
            <?php if ($heading): ?>
            <div class="cb-image-text__heading">
                <h2><?php echo esc_html($heading); ?></h2>
            </div>
            <?php endif; ?>

            <div class="cb-image-text__image">
                <?php if ($video_url): ?>
                <video class="video-cover" data-object-fit="cover" poster="<?php echo esc_url($image_tertiary_url); ?>"
                    autoplay muted loop playsinline>
                    <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                </video>
                <?php else: ?>
                <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_tertiary_url); ?>"
                    alt="<?php echo esc_attr($image_tertiary_alt); ?>">
                <?php endif; ?>
                <img class="img-placeholder" src="//via.placeholder.com/670x500">

            </div>
            <?php if ($text): ?>
            <div class="cb-image-text__text">
                <?php echo wp_kses($text, $allowed_html ); ?>
            </div>
            <?php endif; ?>
            <?php if ($button['button_link']) : ?>
            <?php App\Utilities\get_template_part('views/components/button', $button); ?>
            <?php endif; ?>
        </div>
        <div class="cb-image-text__image-block">
            <div class="cb-image-text__image">
                <?php if ($video_url): ?>
                <video class="video-cover" data-object-fit="cover" poster="<?php echo esc_url($image_tertiary_url); ?>"
                    autoplay muted loop playsinline>
                    <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                </video>
                <?php else: ?>
                <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_tertiary_url); ?>"
                    alt="<?php echo esc_attr($image_tertiary_alt); ?>">
                <?php endif; ?>
                <img class="img-placeholder" src="//via.placeholder.com/670x500">
            </div>

        </div>
    
        <?php if ($flourish_url): ?>
          <div class="c-flourish" style="background-image: url(<?php echo esc_url($flourish_url); ?>);"></div>
        <?php endif; ?>
    </div>
    <?php } if( $module_type === 'type-five'){ ?>
    <div
        class="cb-image-text__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-md-flex align-items-center justify-content-between">
        <div class="cb-image-text__text-block">
            <?php if ($pre_heading): ?>
            <div class="cb-image-text__pre-heading">
                <span><?php echo esc_html($pre_heading); ?></span>
            </div>
            <?php endif; ?>
            <?php if ($heading): ?>
            <div class="cb-image-text__heading">
                <h3><?php echo esc_html($heading); ?></h3>
            </div>
            <?php endif; ?>
            <?php if ($text): ?>
            <div class="cb-image-text__text">
                <?php echo wp_kses($text, $allowed_html ); ?>
            </div>
            <?php endif; ?>
            <?php if ($button['button_link']) : ?>
            <?php App\Utilities\get_template_part('views/components/button', $button); ?>
            <?php endif; ?>
            <div class="cb-image-text__image cb-image-text__image--<?php echo esc_html($full_bleed_image); ?>">
                <img class="image-cover " data-object-fit="cover" src="<?php echo esc_url($image_tertiary_url); ?>"
                    alt="<?php echo esc_attr($image_tertiary_alt); ?>">

                <img class="img-placeholder" src="//via.placeholder.com/670x500">

            </div>
        </div>
        <div class="cb-image-text__image-block">
            <div class="cb-image-text__image">
                <?php if ($image_tertiary_url): ?>
                <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_tertiary_url); ?>"
                    alt="<?php echo esc_attr($image_tertiary_alt); ?>">
                <?php endif; ?>
                <img class="img-placeholder" src="//via.placeholder.com/670x500">
            </div>

        </div>
    
        <?php if ($flourish_url): ?>
          <div class="c-flourish" style="background-image: url(<?php echo esc_url($flourish_url); ?>);"></div>
        <?php endif; ?>
    </div>
    <?php } if( $module_type === 'type-six'){ ?>
    <div
        class="cb-image-text__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-md-flex align-items-center justify-content-between">
        <div class="cb-image-text__text-block">
            <?php if ($pre_heading): ?>
            <div class="cb-image-text__pre-heading">
                <span><?php echo esc_html($pre_heading); ?></span>
            </div>
            <?php endif; ?>
            <?php if ($heading): ?>
            <div class="cb-image-text__heading">
                <h4><?php echo esc_html($heading); ?></h4>
            </div>
            <?php endif; ?>
            <?php if ($text): ?>
            <div class="cb-image-text__text">
                <?php echo wp_kses($text, $allowed_html ); ?>
            </div>
            <?php endif; ?>
            <?php if ($button['button_link']) : ?>
            <?php App\Utilities\get_template_part('views/components/button', $button); ?>
            <?php endif; ?>
            <div class="cb-image-text__image">
                <img class="image-cover" src="<?php echo esc_url($image_four_url); ?>"alt="<?php echo esc_attr($image_four_alt); ?>">
                <img class="img-placeholder" src="//via.placeholder.com/369x312">
            </div>
        </div>
        <div class="cb-image-text__image-block">
            <div class="cb-image-text__image">
                <?php if ($image_four_url): ?>
                <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_four_url); ?>"
                    alt="<?php echo esc_attr($image_four_alt); ?>">
                <?php endif; ?>
                <img class="img-placeholder" src="//via.placeholder.com/369x312">
            </div>

        </div>
    
        <?php if ($flourish_url): ?>
          <div class="c-flourish" style="background-image: url(<?php echo esc_url($flourish_url); ?>);"></div>
        <?php endif; ?>
    </div>
    <?php } ?>
</section>
