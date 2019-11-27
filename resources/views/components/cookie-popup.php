<?php
$allowed_html = [
'a'      => [
'href'  => [],
'title' => [],
],
'br'     => [],
'em'     => [],
'strong' => [],
];
?>
<div class="cookie-popup d-none"><?php echo wp_kses(get_field('cookie_message', 'option'), $allowed_html); ?>
    <input type="button" value="×" class="cookie-popup__close">
</div>
