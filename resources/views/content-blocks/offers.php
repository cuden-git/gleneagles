<?php
  $data = wp_parse_args($data['offers']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $slides = $data['slides'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-offers cb-offers--<?php echo esc_html($module_type); ?> cb-offers--<?php echo esc_html($colour); ?>">
    <?php if( $module_type === 'type-one'){ ?>
    <div
        class="cb-offers__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom);?> cb-offers__<?php echo count($slides);?>-slides">
        <div class="cb-offers__carousel-block">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-pagination-container">
                    <div class="swiper-slide-number">1</div>
                    <div class="swiper-pagination swiper-progress"></div>
                    <div class="swiper-slide-total"></div>
                </div>
                <div class="swiper-wrapper">
                    <?php if ($slides): ?>
                        <?php foreach ($slides as $slide) { ?>
                            <div class="swiper-slide">
                                <div class="swiper-slide-inner">
                                    <div class="cb-offers__slide-image-block">
                                        <div class="cb-offers__slide-image">
                                            <a href="<?php echo esc_url($slide['button']['button_link']['url']) ?>" target="<?php echo esc_attr($slide['button']['button_link']['target']) ?>">
                                                <img class="image-cover"  data-object-fit="cover" src="<?php echo esc_url($slide['image']['url']); ?>" alt="<?php echo esc_attr($slide['image']['alt']); ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cb-offers__slide-text-block">
                                    <?php if ($slide['pre_heading']): ?>
                                        <div class="cb-offers__slide-pre-heading">
                                            <span><?php echo esc_html($slide['pre_heading']) ?></span>
                                        </div>
                                        <?php endif; ?>
                                        <?php if ($slide['heading']): ?>
                                        <div class="cb-offers__slide-heading">
                                            <h5>
                                                <a href="<?php echo esc_url($slide['button']['button_link']['url']) ?>" target="<?php echo esc_attr($slide['button']['button_link']['target']) ?>"><?php echo esc_html($slide['heading']) ?></a>
                                            </h5>
                                        </div>
                                        <?php endif; ?>
                                        <a href="<?php echo esc_url($slide['button']['button_link']['url']) ?>" target="<?php echo esc_attr($slide['button']['button_link']['target']) ?>">
                                            <?php if ($slide['button']) : ?>
                                        </a>
                                        <?php App\Utilities\get_template_part('views/components/button', $slide['button']); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</section>
