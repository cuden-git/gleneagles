<?php
  $allowed_html = [
    'br'     => [],
    'strong' => [],
    'br'     => [],
    'ul'     => [],
    'li' => [],
    'p' => [],
  ];
  $data = wp_parse_args($data['editorial']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $pre_heading = $data['pre_heading'];
  $heading = $data['heading'];
  $text = $data['text'];
  $image_url = $data['image']['url'];
  $image_alt = $data['image']['alt'];
  $image_two_url = $data['image_two']['url'];
  $image_two_alt = $data['image_two']['alt'];
  $image_three_url = $data['image_three']['url'];
  $image_three_alt = $data['image_three']['alt'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $section_id = $data['section_id'];
?>

<!-- removed geo targeting php, might need to add it back -->
<section id="<?php echo esc_attr($section_id); ?>" class="cb-editorial cb-editorial--<?php echo esc_html($module_type); ?> cb-editorial--<?php echo esc_html($colour); ?>">
<?php if( $module_type === 'type-one'){ ?>
  <div class="row no-gutters cb-editorial__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-md-flex">
    <div class="cb-editorial__left-col col-md-6">
      <?php if ($image_url): ?>
      <div class="cb-editorial__image cb-editorial__image--first">
        <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
      </div>
      <?php endif; ?>
      
      <?php if ($image_three_url): ?>
      <div class="offset-md-2 offset-lg-4 offset-xl-6 cb-editorial__image cb-editorial__image--third">
        <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_three_url); ?>" alt="<?php echo esc_attr($image_three_alt); ?>">
      </div>
      <?php endif; ?>
    </div>

    <div class="cb-editorial__right-col col-md-6">
      <?php if ($heading): ?>
      <div class="offset-md-2 cb-editorial__quote-block">
        <div class="cb-editorial__heading">
          <h2><?php echo esc_html($heading); ?></h2>
        </div>
      </div>
      <?php endif; ?>

      <?php if ($image_two_url): ?>
      <div class="offset-3 offset-sm-4 offset-md-4 offset-lg-4 cb-editorial__image cb-editorial__image--second">
        <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_two_url); ?>" alt="<?php echo esc_attr($image_two_alt); ?>">
      </div>
      <?php endif; ?>
    </div>
  </div>
<?php } else if( $module_type === 'type-two'){ ?>
  <div class="row no-gutters cb-editorial__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-md-flex">

    <div class="cb-editorial__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-md-flex align-items-center justify-content-between">

    <div class="cb-editorial__right-col col-md-6">

      <?php if ($image_url): ?>
      <div class="cb-editorial__image cb-editorial__image--first-mobile">
        <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
      </div>
      <?php endif; ?>

      <div class="offset-md-2 cb-editorial__text-block">
        <?php if ($pre_heading): ?>
        <div class="cb-editorial__pre-heading">
          <span><?php echo esc_html($pre_heading); ?></span>
        </div>
        <?php endif; ?>

        <?php if ($heading): ?>
        <div class="cb-editorial__heading">
          <h2><?php echo esc_html($heading); ?></h2>
        </div>
        <?php endif; ?>

        <?php if ($text): ?>
        <div class="cb-editorial__text">
          <?php echo wp_kses($text, $allowed_html ); ?>
        </div>
        <?php endif; ?>
      </div>      

      <?php if ($image_two_url): ?>
      <div class="offset-4 offset-sm-4 offset-md-4 offset-lg-5 cb-editorial__image cb-editorial__image--second">
        <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_two_url); ?>" alt="<?php echo esc_attr($image_two_alt); ?>">
      </div>
      <?php endif; ?>
    </div>
    <div class="cb-editorial__left-col col-md-6">
      <?php if ($image_url): ?>
      <div class="cb-editorial__image cb-editorial__image--first-desktop">
        <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
      </div>
      <?php endif; ?>

      <div class="offset-sm-2 offset-md-4 offset-lg-4 offset-xl-6 cb-editorial__image-offer-container">
        <div class="cb-editorial__image cb-editorial__image--third">
          <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
        </div>        
        <!-- This bit below doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->
        <div class="cb-editorial__pre-heading">
          <span>SEASONAL OFFER</span>
        </div>
        <div class="cb-editorial__heading">
          <h5>A bottle of premium reserve champagne for all room bookings.</h5>
        </div>
        <a href="#" target="_blank" class="c-button c-button--type-three c-button--colour-one">View offer</a>
        <!-- This bit above doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->
      </div>
    </div>
  </div>  
<?php } ?>

</section>
