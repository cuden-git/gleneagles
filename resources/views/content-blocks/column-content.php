<?php
  $data = wp_parse_args($data['column-content']);
  $module_type = $data['type'];
  $text_colour = $data['text_colour'];
  $background_colour = $data['background_colour'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $slides = $data['slides'];
  $slides_two = $data['slides_two'];
  $button = $data['button'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>"
    class="cb-column-content cb-column-content--<?php echo esc_html($module_type); ?> cb-column-content--<?php echo esc_html($text_colour); ?>"
    style="background: <?php echo esc_html($background_colour); ?>;">
    <?php if( $module_type === 'type-one'){ ?>
    <div
        class="cb-column-content__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom);?> cb-column-content__<?php echo count($slides);?>-slides">
        <div class="cb-column-content__carousel-block">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php if ($slides): ?>
                    <?php foreach ($slides as $slide) { ?>
                    <div class="swiper-slide">
                        <div class="swiper-slide-inner">
                            <a href="<?php echo esc_url($slide['button']['button_link']['url']) ?>"
                                target="<?php echo esc_attr($slide['button']['button_link']['target']) ?>" class="cb-column-content__slide-image-link">
                                <div class="cb-column-content__slide-image-block">
                                    <div class="cb-column-content__slide-image">
                                        <img class="image-cover" data-object-fit="cover"
                                            src="<?php echo esc_url($slide['image']['url']); ?>"
                                            alt="<?php echo esc_attr($slide['image']['alt']); ?>">
                                    </div>
                                </div>
                                <?php if (($slide['details']['text'])||($slide['details']['text'])): ?>
                                <div class="cb-column-content__details-block">

                                    <div class="cb-column-content__detail">
                                        <div class="cb-column-content__detail-heading">
                                            <?php echo esc_html($slide['details']['heading']) ?></div>
                                        <div class="cb-column-content__detail-text">
                                            <?php echo esc_html($slide['details']['text']) ?></div>
                                    </div>

                                </div>
                                <?php endif; ?>
                            </a>
                            <div class="cb-column-content__slide-text-block">
                                <a href="<?php echo esc_url($slide['button']['button_link']['url']) ?>"
                                    target="<?php echo esc_attr($slide['button']['button_link']['target']) ?>">
                                    <?php if ($slide['heading']): ?>
                                    <div class="cb-column-content__slide-heading">
                                        <h4><?php echo esc_html($slide['heading']) ?></h4>
                                    </div>
                                    <?php endif; ?>
                                    <?php if ($slide['text']): ?>
                                    <div class="cb-column-content__slide-text">
                                        <span><?php echo esc_html($slide['text']) ?></span>
                                    </div>
                                    <?php endif; ?>
                                </a>
                                <?php if ($slide['button']['button_link']) : ?>
                                <div class="cb-column-content__slide-cta">
                                    <?php App\Utilities\get_template_part('views/components/button', $slide['button']); ?>
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
        </div>
        <div class="cb-column-content__section-cta">
        <?php if ($button['button_link']) : ?>
            <?php App\Utilities\get_template_part('views/components/button', $button); ?>
        <?php endif; ?>
        </div>
    </div>
    <?php } else if( $module_type === 'type-two'){ ?>
    <div class="cb-column-content__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom);?>">
        <?php 
        $slide_count = 0;

        if ($slides_two): ?>
        <?php foreach ($slides_two as $slide) { ?>
        <div class="cb-column-content__slide-wrapper cb-column-content__slide-wrapper--<?php echo esc_html($slide_count) ?>">
            <a href="<?php echo esc_url($slide['button']['button_link']['url']) ?>"
            target="<?php echo esc_attr($slide['button']['button_link']['target']) ?>" class="cb-column-content__slide-image-link">
                <div class="cb-column-content__slide-image-block">
                    <div class="cb-column-content__slide-image">
                        <img class="image-cover" data-object-fit="cover"
                            src="<?php echo esc_url($slide['image']['url']); ?>"
                            alt="<?php echo esc_attr($slide['image']['alt']); ?>">
                    </div>
                </div>
            </a>
            <div class="cb-column-content__slide-text-block cb-column-content__slide-text-block--<?php echo esc_html($slide_count) ?>">
                <a href="<?php echo esc_url($slide['button']['button_link']['url']) ?>"
                    target="<?php echo esc_attr($slide['button']['button_link']['target']) ?>">
                    <?php if ($slide['heading']): ?>
                    <div class="cb-column-content__slide-heading">
                        <h4><?php echo esc_html($slide['heading']) ?></h4>
                    </div>
                    <?php endif; ?>
                    <?php if ($slide['text']): ?>
                    <div class="cb-column-content__slide-text">
                        <span><?php echo esc_html($slide['text']) ?></span>
                    </div>
                    <?php endif; ?>
                </a>
                <?php if ($slide['button']) : ?>
                <div class="cb-column-content__slide-cta">
                    <?php App\Utilities\get_template_part('views/components/button', $slide['button']); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if ($slide['flourish']): ?>
          <div class="c-flourish" style="background-image: url(<?php echo esc_url($slide['flourish']['url']); ?>);"></div>
        <?php endif; ?>
    <?php 
        ++$slide_count;
    } ?>
    <?php endif; ?>
        </div>
    <?php } ?>
</section>
