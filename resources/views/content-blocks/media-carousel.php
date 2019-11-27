<?php
  $data = wp_parse_args($data['media-carousel']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $slides = $data['slides'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-media-carousel cb-media-carousel--<?php echo esc_html($module_type); ?> cb-media-carousel--<?php echo esc_html($colour); ?>">
    <?php if( $module_type === 'type-one'){ ?>
    <div
        class="cb-media-carousel__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?>">

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php if ($slides): ?>
                    <?php foreach ($slides as $slide) {  ?>
                    <div class="swiper-slide">
                        <div class="swiper-slide-inner">
                            <?php if ($slide['video']['url']): ?>
                            <div class="caption-text"><?php echo esc_html($slide['video']['caption']); ?></div>
                            <div class="c-video-container">
                                <button class="video-button"></button>
                                <video class="video-cover" data-object-fit="cover"
                                    poster="<?php echo esc_url($slide['image']['url']); ?>">
                                    <source src="<?php echo esc_url($slide['video']['url']); ?>" type="video/mp4">
                                </video>
                                <img class="img-placeholder" src="//via.placeholder.com/770x500">
                            </div>
                            <?php else: ?>
                            <div class="caption-text"><?php echo esc_html($slide['image']['caption']); ?></div>
                            <div class="image-container">
                                <img class="image-cover" data-object-fit="cover"
                                    src="<?php echo esc_url($slide['image']['url']); ?>"
                                    alt="<?php echo esc_attr($slide['image']['alt']); ?>">
                                <img class="img-placeholder" src="//via.placeholder.com/770x500">
                            </div>
                            <?php endif; ?>
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
