<?php
  $data = wp_parse_args($data['hero']);
  $module_type = $data['type'];
  $text_colour = $data['text_colour'];
  $background_colour = $data['background_colour'];
  $pre_heading = $data['pre_heading'];
  $heading = $data['heading'];
  $sub_heading = $data['sub_heading'];
  $logo = $data['logo'];
  $image_url = $data['image']['url'];
  $image_alt = $data['image']['alt'];
  $video_url = $data['video']['url'];
  $video_autoplay = $data['autoplay_video'];
  $image_type_two_url = $data['image_type_two']['url'];
  $image_type_two_alt = $data['image_type_two']['alt'];
  $section_id = $data['section_id'];
  
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-hero cb-hero--<?php echo esc_html($module_type); ?> cb-hero--<?php echo esc_html($text_colour); ?>" style="background: <?php echo esc_html($background_colour); ?>;">
  <?php if( $module_type === 'type-one'){ ?>
    <div class="cb-hero__container padding-top-xl padding-bottom-xl d-flex flex-column align-items-center justify-content-start justify-content-md-center">
      <?php if ($video_url): ?>
        <video class="video-cover" data-object-fit="cover" poster="<?php echo esc_url($image_url); ?>" autoplay muted loop playsinline>
          <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
        </video>
      <?php else: ?>
        <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
      <?php endif; ?>
      <div class="cb-hero__text-block">
        <?php if ($pre_heading): ?>
          <div class="cb-hero__pre-heading">
            <span><?php echo esc_html($pre_heading); ?></span>
          </div>
        <?php endif; ?>
        <?php if ($heading): ?>
          <div class="cb-hero__heading">
            <h1><?php echo esc_html($heading); ?></h1>
          </div>
        <?php endif; ?>
      </div>
      <div class="cb-hero__animation">
        <div class="cb-hero__animation-block"></div>
        <div class="cb-hero__animation-line"></div>
      </div>
    </div>
  <?php } else if( $module_type === 'type-two'){ ?>
    <div class="cb-hero__container d-md-flex align-items-stretch">
      <div class="cb-hero__image-block">
      <?php if ($video_url): ?>
          <?php if ($video_autoplay): ?>
            <video class="video-cover" data-object-fit="cover" poster="<?php echo esc_url($image_type_two_url); ?>" autoplay muted loop playsinline>
              <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
            </video>
          <?php else: ?>
            <div class="c-video-container">
                <button class="video-button"></button>
                <video class="video-cover" data-object-fit="cover" poster="<?php echo esc_url($image_type_two_url); ?>">
                  <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                </video>
                <img class="img-placeholder" src="//via.placeholder.com/770x500">
            </div>
          <?php endif; ?>
      <?php else: ?>
        <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_type_two_url); ?>" alt="<?php echo esc_attr($image_type_two_alt); ?>">
      <?php endif; ?>      
    </div>
      <div class="cb-hero__text-block d-md-flex padding-top-md padding-bottom-md flex-column align-items-center justify-content-start justify-content-md-center">
        <div class="cb-hero__content">
          <?php if ($pre_heading): ?>
            <div class="cb-hero__pre-heading">
              <span><?php echo esc_html($pre_heading); ?></span>
            </div>
          <?php endif; ?>
          <?php if ($heading): ?>
            <div class="cb-hero__heading">
              <h1><?php echo esc_html($heading); ?></h1>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php } else if( $module_type === 'type-three'){ ?>
    <div class="cb-hero__container d-flex flex-column align-items-center justify-content-start justify-content-md-center">
    <div class="cb-hero__text-block d-md-flex padding-top-xs padding-bottom-xs flex-column align-items-center justify-content-start justify-content-md-center">
      <div class="cb-hero__content">
        <div class="cb-hero__heading <?php if ($logo) { echo esc_html('cb-hero__heading--logo') ;}  ?>">
          <?php if ($logo): ?>
              <div id="logo">
                <img class="logo-image" src="<?php echo esc_url($logo['url']); ?>"/>
                <img id="logo-image-orig" src="<?php echo esc_url($logo['url']); ?>"/>
                <h1><?php echo esc_html($heading); ?><?php if ($sub_heading): ?><?php echo ' '.esc_html($sub_heading); ?><?php endif; ?></h1>
              </div>
          <?php else : ?>
          <h1><?php echo esc_html($heading); ?><?php if ($sub_heading): ?><br><i><?php echo esc_html($sub_heading); ?></i><?php endif; ?></h1>
          <?php endif; ?>
        </div>
      </div>
    </div>
      <div class="cb-hero__image-block flex-grow-1">
        <?php if ($video_url): ?>
          <?php if ($video_autoplay): ?>
            <video class="video-cover" data-object-fit="cover" poster="<?php echo esc_url($image_url); ?>" autoplay muted loop playsinline>
              <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
            </video>
          <?php else: ?>
            <div class="c-video-container">
                <button class="video-button"></button>
                <video class="video-cover" data-object-fit="cover" poster="<?php echo esc_url($image_url); ?>">
                  <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                </video>
                <img class="img-placeholder" src="//via.placeholder.com/770x500">
            </div>
          <?php endif; ?>
        <?php else: ?>
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
        <?php endif; ?>
      </div>
    </div>
  <?php } ?>

</section>
