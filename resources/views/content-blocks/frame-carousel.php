<?php
  $data = wp_parse_args($data['frame-carousel']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $slides = $data['slides'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-frame-carousel cb-frame-carousel--<?php echo esc_html($module_type); ?> cb-frame-carousel--<?php echo esc_html($colour); ?>">
    <?php if( $module_type == 'type-one'){ ?>
    <div
        class="cb-frame-carousel__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?>">
        <div class="cb-frame-carousel__carousel-block">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php if ($slides): ?>
                        <?php foreach ($slides as $slide) {  ?>
                            <div class="swiper-slide">
                                <a href="<?php echo esc_url($slide['link']['url']) ?>" target="<?php echo esc_attr($slide['link']['target']) ?>">
                                    <div class="swiper-slide-inner">
                                        <div class="cb-frame-carousel__slide-image-block">
                                            <div class="cb-frame-carousel__slide-image">
                                                <img src="<?php echo esc_url($slide['image']['url']) ?>" alt="<?php echo esc_html($slide['image']['alt']) ?>">
                                            </div>
                                        </div>
                                        <div class="cb-frame-carousel__slide-text-block">
                                            <?php if ($slide['heading']): ?>
                                                <div class="cb-frame-carousel__slide-heading">
                                                    <h4><?php echo esc_html($slide['heading']) ?></h4>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </a>
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
        </div>
    </div>
    <?php } else if( $module_type == 'type-two'){ ?>
    <div
        class="cb-frame-carousel__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?>">
        <div class="cb-frame-carousel__carousel-block">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php if ($slides): ?>
                    <?php $i = 1; ?>
                        <?php foreach ($slides as $slide) {  ?>
                            <div class="swiper-slide">
                                <a href="<?php echo esc_url($slide['link']['url']) ?>" target="<?php echo esc_attr($slide['link']['target']) ?>">
                                    <div class="swiper-slide-inner">
                                            
                                        <div class="cb-frame-carousel__slide-text-block">
                                            <div class="cb-frame-carousel__slide-number">
                                                0<?php echo esc_html($i); ?>
                                            </div>
                                            <div class="cb-frame-carousel__slide-heading">
                                                <h2><?php echo esc_html($slide['heading']) ?></h2>
                                            </div>
                                            <div class="cb-frame-carousel__slide-text">
                                                <?php echo esc_html($slide['text']) ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php $i++; ?> 
                        <?php } ?>
                    <?php endif; ?>
                </div>
            <div class="swiper-pagination-container">
                <div class="swiper-slide-number">1</div>
                <div class="swiper-pagination swiper-progress"></div>
                <div class="swiper-slide-total"></div>
            </div>
            </div>
        </div>
    </div>
    <?php } ?>
</section>