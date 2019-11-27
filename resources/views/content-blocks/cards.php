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
  $data = wp_parse_args($data['cards']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $slides = $data['slides'];
  $details = $data['details'];
  $section_id = $data['section_id'];  
  $heading = $data['heading'];
  $sub_heading = $data['sub_heading'];
  $small_heading = $data['small_heading'];
  $text = $data['text'];
  $more_link = $data['link'];
  $button = $data['button'];
?>
<section id="<?php echo esc_attr($section_id); ?>" class="cb-cards cb-cards--<?php echo esc_html($module_type); ?> cb-cards--<?php echo esc_html($colour); ?>">
    <?php if( $module_type === 'type-one'){ ?>
    <div
        class="cb-cards__container">
        <div class="cb-cards__text-block">

            <?php if ($heading): ?>
            <div class="cb-cards__heading">
                <h3><?php echo esc_html($heading); ?><?php if ($sub_heading): ?>
                    <br><i><?php echo esc_html($sub_heading); ?></i>
                    <?php endif; ?></h3>
            </div>
            <?php endif; ?>
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php if ($slides): ?>
                    <?php foreach ($slides as $slide) {  ?>
                    <div class="swiper-slide">
                        <div class="swiper-slide-inner">
                            <div class="image-container">
                                <img class="image-cover" data-object-fit="cover"
                                    src="<?php echo esc_url($slide['image']['url']); ?>"
                                    alt="<?php echo esc_attr($slide['image']['alt']); ?>">
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

            <?php if ($small_heading): ?>
                <div class="cb-cards__small-heading"><?php echo esc_html($small_heading); ?></div>
            <?php endif; ?>

            <?php if ($text): ?>
            <div class="cb-cards__text">
                <?php echo wp_kses($text, $allowed_html ); ?>
            </div>
            <?php endif; ?>

            <?php if ($details['rows'][0]['text_one']): ?>
            <div class="cb-cards__details-block">
                <table>
                    <?php if ($details['header']): ?>
                    <?php foreach ($details['header'] as $details_header) {  ?>
                    <tr>
                        <th><?php echo esc_html($details_header['text_one']); ?></th>
                        <th><?php echo esc_html($details_header['text_two']); ?></th>
                    </tr>

                    <?php } ?>
                    <?php endif; ?>
                    <?php if ($details['rows']): ?>
                    <?php foreach ($details['rows'] as $details_rows) {  ?>

                    <tr>
                        <td><?php echo esc_html($details_rows['text_one']); ?></td>
                        <td><?php echo esc_html($details_rows['text_two']); ?></td>
                    </tr>

                    <?php } ?>
                    <?php endif; ?>
                </table>

            </div>
            <?php endif; ?>
                        
            <?php if ($more_link) : ?>
            <a href="<?php echo esc_url($more_link['url']); ?>" target="<?php echo esc_attr($more_link['target']); ?>" class="c-button c-button--type-quaternary c-button--colour-one"><?php echo esc_html($more_link['title']); ?></a>
            <?php endif; ?>
        <?php if ($button['button_link']) : ?>
          <?php App\Utilities\get_template_part('views/components/button', $button); ?>
        <?php endif; ?>
        </div>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php if ($slides): ?>
                <?php foreach ($slides as $slide) {  ?>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner">
                        <div class="image-container">
                            <img class="image-cover" data-object-fit="cover"
                                src="<?php echo esc_url($slide['image']['url']); ?>"
                                alt="<?php echo esc_attr($slide['image']['alt']); ?>">
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
    <?php } ?>
</section>
