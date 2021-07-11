<?php
/**
 * Footer logo template
 *
 * @package Astro
 */

use Astro\Inc\Menus;

$menu_class     = Menus::get_instance();
$footer_menu_id = $menu_class->get_menu_id('footer-menu');
$menu           = wp_get_nav_menu_object($footer_menu_id);
?>

<div class="col-md-6 mx-auto text-center">

    <?php
    $footer_logo = get_field('footer_logo', $menu);

    if ( ! empty($footer_logo)) {
        ?>
        <a href="<?php the_field('footer_logo_link', $menu); ?>">
            <img src="<?php echo esc_url($footer_logo['url']); ?>"
                 alt="<?php echo esc_attr($footer_logo['alt']); ?>"
                 class="mx-auto d-block mb-3 footer-logo">
        </a>
        <?php
    }
    ?>

    <p class="footer-text-subtle"><?php the_field('footer_tagline', $menu); ?></p>
</div>
