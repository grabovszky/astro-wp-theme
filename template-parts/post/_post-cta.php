<?php
/**
 * Template for displaying a post call to action section
 *
 * @package Astro
 */

$text        = esc_html__('Try out Rackhost.hu for more information about our products.', 'astro');
$subtle_text = ' ';
$link        = esc_html__('https://www.rackhost.hu', 'astro');
$button_text = esc_html__('I\'ll try', 'astro');
$bg_url      = get_site_url() . '/wp-content/uploads/domain-banner.svg';

if (get_field('cta_text_override')) {
    $text = get_field('cta_text_override');
} elseif (get_field('cta_text', $args['category']->taxonomy . '_' . $args['category']->term_id)) {
    $text = get_field('cta_text', $args['category']->taxonomy . '_' . $args['category']->term_id);
}

if (get_field('cta_subtle_text_override')) {
    $subtle_text = get_field('cta_subtle_text_override');
} elseif (get_field('cta_subtle_text', $args['category']->taxonomy . '_' . $args['category']->term_id)) {
    $subtle_text = get_field('cta_subtle_text', $args['category']->taxonomy . '_' . $args['category']->term_id);
}

if (get_field('cta_link_override')) {
    $link = get_field('cta_link_override');
} elseif (get_field('cta_link', $args['category']->taxonomy . '_' . $args['category']->term_id)) {
    $link = get_field('cta_link', $args['category']->taxonomy . '_' . $args['category']->term_id);
}

if (get_field('cta_button_text_override')) {
    $button_text = get_field('cta_button_text_override');
} elseif (get_field('cta_button_text', $args['category']->taxonomy . '_' . $args['category']->term_id)) {
    $button_text = get_field('cta_button_text', $args['category']->taxonomy . '_' . $args['category']->term_id);
}

if (wp_is_mobile()) {
    if (get_field('cta_mobile_img_override')) {
        $bg_url = get_field('cta_mobile_img_override')['url'];
    } elseif (get_field('cta_mobile_img', $args['category']->taxonomy . '_' . $args['category']->term_id)) {
        $bg_url = get_field('cta_mobile_img', $args['category']->taxonomy . '_' . $args['category']->term_id)['url'];
    }
} else {
    if (get_field('cta_desktop_img_override')) {
        $bg_url = get_field('cta_desktop_img_override')['url'];
    } elseif (get_field('cta_desktop_img', $args['category']->taxonomy . '_' . $args['category']->term_id)) {
        $bg_url = get_field('cta_desktop_img', $args['category']->taxonomy . '_' . $args['category']->term_id)['url'];
    }
}

?>

<div class="d-flex flex-column justify-content-center align-items-center py-4 margin-bottom-big"
     style="
             height: <?php echo wp_is_mobile() ? '291px' : '248px'; ?>;
             background-image: url(<?php echo $bg_url; ?>);
             background-repeat: no-repeat;
             background-position: center;
             ">
    <h3 class="text-h3 text-white text-bold text-center"><?php echo $text; ?></h3>
    <p class="text-regular text-purple-subtle text-center"><?php echo $subtle_text; ?></p>
    <a class="button button-primary py-2 px-4" href="<?php echo $link; ?>"
       rel="canonical"><?php echo $button_text; ?></a>
</div>
