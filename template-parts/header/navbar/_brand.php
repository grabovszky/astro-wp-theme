<?php
/**
 * Header navbar brand logo template
 *
 * @package Astro
 */

$logo = get_field((wp_is_mobile()) ? 'header_logo_mobile' : 'header_logo_full', $args['header_menu']);

?>
<div class="ps-3">
    <?php
    if ($logo) {
        ?>
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <img src="<?php echo esc_url($logo['url']); ?>"
                 alt="<?php echo esc_attr($logo['alt']); ?>"
                 class="d-inline-block">
        </a>
        <?php
    } elseif (function_exists('the_custom_logo')) {
        ?>
        <div class="navbar-brand">
            <?php the_custom_logo(); ?>
        </div>
        <?php
    } else {
        ?>
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <?php get_bloginfo('name'); ?>
        </a>
        <?php
    }
    ?>
</div>
