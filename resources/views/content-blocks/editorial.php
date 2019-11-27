<?php
  $allowed_html = [
    'br'     => [],
    'strong' => [],
    'br'     => [],
    'ul'     => [],
    'li' => [],
    'p' => array(
        'class' => array()
    ),
  ];
  $data = wp_parse_args($data['editorial']);
  $module_type = $data['type'];
  $text_colour = $data['text_colour'];
  $background_colour = $data['background_colour'];
  $pre_heading = $data['pre_heading'];
  $heading = $data['heading'];
  $text = $data['text'];
  $illustration_url = $data['illustration']['url'];
  $illustration_alt = $data['illustration']['alt'];
  $image_one_url = $data['image_one']['url'];
  $image_one_alt = $data['image_one']['alt'];
  $image_two_url = $data['image_two']['url'];
  $image_two_alt = $data['image_two']['alt'];
  $image_three_url = $data['image_three_']['url'];
  $image_three_alt = $data['image_three_']['alt'];
  $enable_offer = $data['enable_offer'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $section_id = $data['section_id'];
?>

<section id="<?php echo esc_attr($section_id); ?>" class="cb-editorial cb-editorial--<?php echo esc_html($module_type); ?> cb-editorial--<?php echo esc_html($text_colour); ?>" style="background: <?php echo esc_html($background_colour); ?>;">
  <?php if( $module_type === 'type-one'){ ?>
  <div class="cb-editorial__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?>">

    <div class="cb-editorial__left-part">

      <?php if ($image_one_url): ?>
      <div class="cb-editorial__image cb-editorial__image--one">
        <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_one_url); ?>" alt="<?php echo esc_attr($image_one_alt); ?>">
      </div>
      <?php endif; ?>

      <?php if ($enable_offer): ?>
      <!-- This bit below doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->
      <div class="cb-editorial__offer">
        <div class="cb-editorial__image cb-editorial__image--offer">
          <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
        </div>
        <div class="cb-editorial__pre-heading cb-editorial__pre-heading--offer">
          <span>SEASONAL OFFER</span>
        </div>
        <div class="cb-editorial__offer__heading">
          <h5>A bottle of premium reserve champagne for all room bookings.</h5>
        </div>
        <a href="#" target="_blank" class="c-button c-button--type-tertiary c-button--colour-one">View offer</a>
      </div>
      <!-- This bit above doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->

      <?php elseif ($image_three_url): ?>
      <div class="cb-editorial__image cb-editorial__image--three">
        <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_three_url); ?>" alt="<?php echo esc_attr($image_three_alt); ?>">
      </div>
      <?php endif; ?>

    </div>

    <div class="cb-editorial__right-part">

      <?php if ($heading): ?>
      <div class="cb-editorial__heading">
        <h2><?php echo esc_html($heading); ?></h2>
      </div>
      <?php endif; ?>

      <?php if ($image_two_url): ?>
      <div class="cb-editorial__image cb-editorial__image--two">
        <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_two_url); ?>" alt="<?php echo esc_attr($image_two_alt); ?>">
      </div>
      <?php endif; ?>

    </div>


    <div class="cb-editorial__small">

      <?php if ($enable_offer): ?>
      <!-- This bit below doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->
      <div class="cb-editorial__offer">
        <div class="cb-editorial__image cb-editorial__image--offer">
          <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
        </div>
        <div class="cb-editorial__pre-heading cb-editorial__pre-heading--offer">
          <span>SEASONAL OFFER</span>
        </div>
        <div class="cb-editorial__offer__heading">
          <h5>A bottle of premium reserve champagne for all room bookings.</h5>
        </div>
        <a href="#" target="_blank" class="c-button c-button--type-tertiary c-button--colour-one">View offer</a>
      </div>
      <!-- This bit above doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->

      <?php elseif ($image_three_url): ?>
      <div class="cb-editorial__image cb-editorial__image--three">
        <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_three_url); ?>" alt="<?php echo esc_attr($image_three_alt); ?>">
      </div>
      <?php endif; ?>

    </div>

  </div>

  <?php } else if( $module_type === 'type-two'){ ?>

  <div class="cb-editorial__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?>">

    <div class="cb-editorial__left-part">

        <?php if ($image_one_url): ?>
        <div class="cb-editorial__image cb-editorial__image--one">
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_one_url); ?>" alt="<?php echo esc_attr($image_one_alt); ?>">
        </div>
        <?php endif; ?>

        <?php if ($enable_offer): ?>
        <!-- This bit below doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->
        <div class="cb-editorial__offer">
          <div class="cb-editorial__image cb-editorial__image--offer">
            <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
          </div>
          <div class="cb-editorial__pre-heading cb-editorial__pre-heading--offer">
            <span>SEASONAL OFFER</span>
          </div>
          <div class="cb-editorial__offer__heading">
            <h5>A bottle of premium reserve champagne for all room bookings.</h5>
          </div>
          <a href="#" target="_blank" class="c-button c-button--type-tertiary c-button--colour-one">View offer</a>
        </div>
        <!-- This bit above doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->

        <?php elseif ($image_three_url): ?>
        <div class="cb-editorial__image cb-editorial__image--three">
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_three_url); ?>" alt="<?php echo esc_attr($image_three_alt); ?>">
        </div>
        <?php endif; ?>

    </div>

    <div class="cb-editorial__right-part">

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

        <?php if ($image_two_url): ?>
        <div class="cb-editorial__image cb-editorial__image--two">
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_two_url); ?>" alt="<?php echo esc_attr($image_two_alt); ?>">
        </div>
        <?php endif; ?>

    </div>

    <div class="cb-editorial__small">

        <?php if ($enable_offer): ?>
        <!-- This bit below doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->
        <div class="cb-editorial__offer">
          <div class="cb-editorial__image cb-editorial__image--offer">
            <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
          </div>
          <div class="cb-editorial__pre-heading cb-editorial__pre-heading--offer">
            <span>SEASONAL OFFER</span>
          </div>
          <div class="cb-editorial__offer__heading">
            <h5>A bottle of premium reserve champagne for all room bookings.</h5>
          </div>
          <a href="#" target="_blank" class="c-button c-button--type-tertiary c-button--colour-one">View offer</a>
        </div>
        <!-- This bit above doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->

        <?php elseif ($image_three_url): ?>
        <div class="cb-editorial__image cb-editorial__image--three">
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_three_url); ?>" alt="<?php echo esc_attr($image_three_alt); ?>">
        </div>
        <?php endif; ?>

    </div>

  </div>

  <?php } else if( $module_type === 'type-three'){ ?>

  <div class="cb-editorial__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?>">

    <div class="cb-editorial__left-part">

        <?php if ($image_one_url): ?>
        <div class="cb-editorial__image cb-editorial__image--one">
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_one_url); ?>" alt="<?php echo esc_attr($image_one_alt); ?>">
        </div>
        <?php endif; ?>

        <?php if ($enable_offer): ?>
        <!-- This bit below doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->
        <div class="cb-editorial__offer">
          <div class="cb-editorial__image cb-editorial__image--offer">
            <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
          </div>
          <div class="cb-editorial__pre-heading cb-editorial__pre-heading--offer">
            <span>SEASONAL OFFER</span>
          </div>
          <div class="cb-editorial__offer__heading">
            <h5>A bottle of premium reserve champagne for all room bookings.</h5>
          </div>
          <a href="#" target="_blank" class="c-button c-button--type-tertiary c-button--colour-one">View offer</a>
        </div>
        <!-- This bit above doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->

        <?php elseif ($image_three_url): ?>
        <div class="cb-editorial__image cb-editorial__image--three">
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_three_url); ?>" alt="<?php echo esc_attr($image_three_alt); ?>">
        </div>
        <?php endif; ?>

    </div>

    <div class="cb-editorial__right-part">

        <div class="cb-editorial__right-part__top">

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

        </div>

        <?php if ($image_two_url): ?>
        <div class="cb-editorial__image cb-editorial__image--two">
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_two_url); ?>" alt="<?php echo esc_attr($image_two_alt); ?>">
        </div>
        <?php endif; ?>

    </div>

    <div class="cb-editorial__small">

        <?php if ($enable_offer): ?>
        <!-- This bit below doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->
        <div class="cb-editorial__offer">
          <div class="cb-editorial__image cb-editorial__image--offer">
            <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
          </div>
          <div class="cb-editorial__pre-heading cb-editorial__pre-heading--offer">
            <span>SEASONAL OFFER</span>
          </div>
          <div class="cb-editorial__offer__heading">
            <h5>A bottle of premium reserve champagne for all room bookings.</h5>
          </div>
          <a href="#" target="_blank" class="c-button c-button--type-tertiary c-button--colour-one">View offer</a>
        </div>
        <!-- This bit above doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->

        <?php elseif ($image_three_url): ?>
        <div class="cb-editorial__image cb-editorial__image--three">
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_three_url); ?>" alt="<?php echo esc_attr($image_three_alt); ?>">
        </div>
        <?php endif; ?>

    </div>

  </div>

  <?php } else if( $module_type === 'type-four'){ ?>

  <div class="cb-editorial__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?>">

    <div class="cb-editorial__left-part">

        <?php if ($image_one_url): ?>
        <div class="cb-editorial__image cb-editorial__image--one">
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_one_url); ?>" alt="<?php echo esc_attr($image_one_alt); ?>">
        </div>
        <?php endif; ?>

        <?php if ($enable_offer): ?>
        <!-- This bit below doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->
        <div class="cb-editorial__offer">
          <div class="cb-editorial__image cb-editorial__image--offer">
            <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
          </div>
          <div class="cb-editorial__pre-heading cb-editorial__pre-heading--offer">
            <span>SEASONAL OFFER</span>
          </div>
          <div class="cb-editorial__offer__heading">
            <h5>A bottle of premium reserve champagne for all room bookings.</h5>
          </div>
          <a href="#" target="_blank" class="c-button c-button--type-tertiary c-button--colour-one">View offer</a>
        </div>
        <!-- This bit above doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->

        <?php elseif ($image_three_url): ?>
        <div class="cb-editorial__image cb-editorial__image--three">
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_three_url); ?>" alt="<?php echo esc_attr($image_three_alt); ?>">
        </div>
        <?php endif; ?>

    </div>

    <div class="cb-editorial__right-part">

        <?php if ($illustration_url): ?>
        <div class="cb-editorial__image cb-editorial__illustration">
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($illustration_url); ?>" alt="<?php echo esc_attr($illustration_alt); ?>">
        </div>
        <?php endif; ?>

        <?php if ($image_two_url): ?>
        <div class="cb-editorial__image cb-editorial__image--two">
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_two_url); ?>" alt="<?php echo esc_attr($image_two_alt); ?>">
        </div>
        <?php endif; ?>

    </div>

    <div class="cb-editorial__small">

        <?php if ($enable_offer): ?>
        <!-- This bit below doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->
        <div class="cb-editorial__offer">
          <div class="cb-editorial__image cb-editorial__image--offer">
            <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
          </div>
          <div class="cb-editorial__pre-heading cb-editorial__pre-heading--offer">
            <span>SEASONAL OFFER</span>
          </div>
          <div class="cb-editorial__offer__heading">
            <h5>A bottle of premium reserve champagne for all room bookings.</h5>
          </div>
          <a href="#" target="_blank" class="c-button c-button--type-tertiary c-button--colour-one">View offer</a>
        </div>
        <!-- This bit above doesnt come from CMS - Will be pulled from offers (somehwere else) so no PHP involved for now. -->

        <?php elseif ($image_three_url): ?>
        <div class="cb-editorial__image cb-editorial__image--three">
          <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_three_url); ?>" alt="<?php echo esc_attr($image_three_alt); ?>">
        </div>
        <?php endif; ?>

    </div>

  </div>

  <?php } ?>

</section>
