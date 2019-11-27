<?php
$data = wp_parse_args($data['featured-content']);
$module_type = $data['type'];
$text_colour = $data['text_colour'];
$background_colour = $data['background_colour'];
$pre_heading = $data['pre_heading'];
$heading = $data['heading'];
$text = $data['text'];
$image_url = $data['image']['url'];
$image_alt = $data['image']['alt'];
$image_two_url = $data['image_two']['url'];
$image_two_alt = $data['image_two']['alt'];
$button = $data['button'];
$padding_top = $data['margins']['margin_top'];
$padding_bottom = $data['margins']['margin_bottom'];
$section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>"
    class="cb-featured-content cb-featured-content--<?php echo esc_html($module_type); ?> cb-featured-content--<?php echo esc_html($text_colour); ?>" style="background: <?php echo esc_html($background_colour); ?>;">
    <?php if( $module_type === 'type-one'){ ?>
    <div
        class="padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-flex flex-column align-items-center justify-content-start justify-content-md-center">
        <div class="cb-featured-content__block">
            <?php if ($image_url): ?>
            <div class="cb-featured-content__image">
                <?php if ($button['button_link']) : ?>
                <a href="<?php echo esc_url($button['button_link']['url']); ?>"
                    target="<?php echo esc_attr($button['button_link']['target']); ?>">
                    <?php endif; ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                    <img class="img-placeholder" src="//via.placeholder.com/590x542">
                    <?php if ($button['button_link']) : ?>
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <div class="cb-featured-content__text-block">
                <img class="img-placeholder" src="//via.placeholder.com/590x542">
                <div class="cb-featured-content__container">
                    <?php if ($heading): ?>
                    <div class="cb-featured-content__heading">
                        <h4><?php echo esc_html($heading); ?></h4>
                    </div>
                    <?php endif; ?>
                    <?php if ($text): ?>
                    <div class="cb-featured-content__text">
                        <p><?php echo esc_html($text); ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if ($button['button_link']) : ?>
                    <?php App\Utilities\get_template_part('views/components/button', $button); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php } else if( $module_type === 'type-two'){ ?>
    <div
        class="padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?> d-flex flex-column align-items-center justify-content-start justify-content-md-center">
        <div class="cb-featured-content__block">
            <div class="cb-featured-content__text-block">
                <img class="img-placeholder" src="//via.placeholder.com/700x312">
                <div class="cb-featured-content__container">
                    <?php if ($pre_heading): ?>
                    <div class="cb-featured-content__pre_heading">
                        <span><?php echo esc_html($pre_heading); ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if ($heading): ?>
                    <div class="cb-featured-content__heading">
                        <h3><?php echo esc_html($heading); ?></h3>
                    </div>
                    <?php endif; ?>
                    <?php if ($text): ?>
                    <div class="cb-featured-content__text">
                        <p><?php echo esc_html($text); ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if ($button['button_link']) : ?>
                    <?php App\Utilities\get_template_part('views/components/button', $button); ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($image_two_url): ?>
            <div class="cb-featured-content__image">
                <?php if ($button['button_link']) : ?>
                <a href="<?php echo esc_url($button['button_link']['url']); ?>"
                    target="<?php echo esc_attr($button['button_link']['target']); ?>">
                    <?php endif; ?>
                    <img class="image-cover" data-object-fit="cover" src="<?php echo esc_url($image_two_url); ?>" alt="<?php echo esc_attr($image_two_alt); ?>">
                    <img class="img-placeholder" src="//via.placeholder.com/422x312">
                    <?php if ($button['button_link']) : ?>
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php } ?>
</section>
