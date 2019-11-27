<?php
  $data = wp_parse_args($data['image-carousel']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $slides = $data['slides'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-image-carousel cb-image-carousel--<?php echo esc_html($module_type); ?> cb-image-carousel--<?php echo esc_html($colour); ?>">
    <?php if( $module_type === 'type-one'){ ?>
    <div
        class="cb-image-carousel__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?>">

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php if ($slides): ?>
                    <?php foreach ($slides as $slide) {  ?>
                        <div class="swiper-slide swiper-slide--<?php echo esc_html($slide['type']); ?>">
                            <div class="swiper-slide-inner w-100">
                                <?php if($slide['type'] == 'portrait') {?>
                                <div class="image-container image-container--portrait w-100">
                                    <img class="image-cover" data-object-fit="cover"
                                        src="<?php echo esc_url($slide['image_portrait']['url']); ?>"
                                        alt="<?php echo esc_attr($slide['image_portrait']['alt']); ?>">
                                </div>
                                <?php } else { ?>
                                <div class="image-container image-container--landscape w-100">
                                    <img class="image-cover" data-object-fit="cover"
                                        src="<?php echo esc_url($slide['image_landscape']['url']); ?>"
                                        alt="<?php echo esc_attr($slide['image_landscape']['alt']); ?>">
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php endif; ?>
            </div>
            <div class="swiper-pagination-container">
                <div class="swiper-slide-number">1</div>
                <div class="swiper-pagination swiper-progress"></div>
                <div class="swiper-slide-total"></div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
    </div>
    <?php } ?>
</section>

<!-- <img class="img-placeholder" src="//via.placeholder.com/472x608"> -->
<!-- <img class="img-placeholder" src="//via.placeholder.com/472x352"> -->
