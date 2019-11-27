<?php
  $data = wp_parse_args($data['perks-carousel']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $pre_heading = $data['pre_heading'];
  $heading = $data['heading'];
  $text = $data['text'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $slides = $data['slides'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-perks-carousel cb-perks-carousel--<?php echo esc_html($module_type); ?> cb-perks-carousel--<?php echo esc_html($colour); ?>">
  <?php if( $module_type === 'type-one'){ ?>
    <div class="cb-perks-carousel__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?>">
      <div class="cb-perks-carousel__text-block">
      <?php if ($pre_heading): ?>
          <div class="cb-perks-carousel__pre-heading">
            <span><?php echo esc_html($pre_heading); ?></span>
          </div>
        <?php endif; ?>
        <?php if ($heading): ?>
          <div class="cb-perks-carousel__heading">
            <h2><?php echo esc_html($heading); ?></h2>
          </div>
        <?php endif; ?>
        <?php if ($text): ?>
          <div class="cb-perks-carousel__text">
            <p><?php echo esc_html($text); ?></p>
          </div>
        <?php endif; ?>
      </div>
      <div class="cb-perks-carousel__carousel-block">
        <!-- Swiper -->
        <div class="swiper-container">
          <div class="swiper-wrapper">
              <?php foreach ($slides as $slide) {  ?>
                <?php if ($slides): ?>

                <div class="swiper-slide">
              <a href="<?php echo esc_url($slide['link']['url']); ?>" target="<?php echo esc_url($slide['link']['target']); ?>">
                <div class="swiper-slide-inner">
                  <div class="cb-perks-carousel__slide-image-block">
                    <div class="cb-perks-carousel__slide-image">
                      <img src="<?php echo esc_url($slide['image']['url']); ?>" alt="<?php echo esc_attr($slide['image']['alt']); ?>">
                    </div>
                  </div>
                  <div class="cb-perks-carousel__slide-text-block">
                    <div class="cb-perks-carousel__slide-heading">
                      <h5><?php echo esc_html($slide['heading']); ?></h5>
                    </div>
                    <div class="cb-perks-carousel__slide-text">
                      <p><?php echo esc_html($slide['text']); ?></p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <?php endif; ?>
              <?php } ?>
        </div>
        <div class="swiper-pagination-container">
          <div class="swiper-slide-number">1</div>
          <div class="swiper-pagination swiper-progress"></div>
          <div class="swiper-slide-total"></div>
        </div>
        </div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  <?php } ?>
</section>
