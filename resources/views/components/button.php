<?php
$button = wp_parse_args($data);
$button_text = $button['button_link']['title'];
$button_link = $button['button_link']['url'];
$button_target = $button['button_link']['target'];
$button_type = $button['button_type'];
$button_colour = $button['button_colour'];
?>

<a href="<?php echo esc_url($button_link); ?>" target="<?php echo esc_attr($button_target); ?>" class="c-button c-button--<?php echo esc_attr($button_type); ?> c-button--<?php echo esc_attr($button_colour); ?>"><?php echo esc_attr($button_text); ?></a>
