<?php
  $data = wp_parse_args($data['page-break']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $text = $data['text'];
  $image_url = $data['image']['url'];
  $image_alt = $data['image']['alt'];
  $video_url = $data['video']['url'];
  $matterport_url = $data['matterport'];
  $image_type_two_url = $data['image_type_two']['url'];
  $section_id = $data['section_id'];
  $alternative_layout = $data['alternative_layout'];
  if($alternative_layout){
    $alternative_layout = 'alternative-layout';
  }
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-page-break cb-page-break--<?php echo esc_html($module_type); ?> cb-page-break--<?php echo esc_html($colour); ?> cb-page-break--<?php echo esc_html($alternative_layout); ?>">
  <?php if( $module_type === 'type-one'){ ?>
    <div class="cb-page-break__container d-md-flex align-items-stretch">
      <div class="cb-page-break__image-block">
        <div class="cb-page-break__image">
          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
        </div>
      </div>
      <div class="cb-page-break__text-block d-md-flex flex-column align-items-start justify-content-start justify-content-md-center">
        <div class="cb-page-break__content">
          <?php if ($text): ?>
            <div class="cb-page-break__text">
              <h4><?php echo esc_html($text); ?></h4>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php } else if( $module_type === 'type-two'){ ?>
    <div class="cb-page-break__container d-md-flex align-items-stretch cb-page-break__container--<?php if ($matterport_url){ echo esc_html('matterport'); } ?>">
      <?php if ($matterport_url): ?>
        <iframe width="100%" height="100%" style="max-height: 100%;" src="<?php echo esc_url($matterport_url); ?>" frameborder="0" allowfullscreen="" allow="vr"></iframe>
      <?php elseif ($video_url): ?>
        <video class="video-cover" data-object-fit="cover" poster="<?php echo esc_url($image_type_two_url); ?>" autoplay muted loop playsinline >
        <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
      </video>
    <?php else: ?>
      <img class="image-cover" src="<?php echo esc_url($image_type_two_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
    <?php endif; ?>
    </div>
  <?php } ?>

</section>
