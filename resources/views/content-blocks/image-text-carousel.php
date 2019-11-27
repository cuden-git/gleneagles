<?php
  $data = wp_parse_args($data['image-text-carousel']);
  $module_type = $data['type'];
  $text_colour = $data['text_colour'];
  $background_colour = $data['background_colour'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $slides = $data['slides'];
  $button = $data['button'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-image-text-carousel cb-image-text-carousel--<?php echo esc_html($module_type); ?> cb-image-text-carousel--<?php echo esc_html($text_colour); ?>" style="background-color: <?php echo esc_html($background_colour); ?>;">
        <?php if ($module_type === 'type-one') { ?>
        <div
            class="cb-image-text-carousel__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom);?> cb-image-text-carousel__<?php echo count($slides);?>-slides">
            <div class="cb-image-text-carousel__carousel-block">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php if ($slides): ?>
                            <?php foreach ($slides as $slide) { ?>
                                <div class="swiper-slide">
                                    <div class="swiper-slide-inner">
                                    <?php if ($slide['image']['url']): ?>
                                        <div class="cb-image-text-carousel__slide-image-block">
                                            <div class="cb-image-text-carousel__slide-image">
                                                <img class="image-cover"  data-object-fit="cover" src="<?php echo esc_url($slide['image']['url']); ?>" alt="<?php echo esc_attr($slide['image']['alt']); ?>">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                        <div class="cb-image-text-carousel__slide-content">
                                            <?php if ($slide['heading']): ?>
                                                <div class="cb-image-text-carousel__slide-heading">
                                                    <h4><?php echo esc_html($slide['heading']) ?></h4>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($slide['text']): ?>
                                                <div class="cb-image-text-carousel__slide-text">
                                                    <span><?php echo esc_html($slide['text']) ?></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
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

            <?php if ($button['button_link']) : ?>
            <?php App\Utilities\get_template_part('views/components/button', $button); ?>
            <?php endif; ?>
        </div>
        <?php } ?>
</section>
