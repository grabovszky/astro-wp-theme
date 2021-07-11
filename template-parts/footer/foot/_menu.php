<?php
/**
 * Footer custom menu template
 *
 * @package Astro
 */

use Astro\Inc\Menus;

$menu_class     = Menus::get_instance();
$footer_menu_id = $menu_class->get_menu_id('footer-menu');
$footer_menus   = wp_get_nav_menu_items($footer_menu_id);

$menu  = wp_get_nav_menu_object($footer_menu_id);
$email = get_field('footer_contact_email', $menu);
$tel_1 = get_field('footer_contact_phone_1', $menu);
$tel_2 = get_field('footer_contact_phone_2', $menu);
?>

<div class="col-lg-3">
    <h6 class="footer-header">
        <?php echo esc_html__('Contact', 'astro') ?>
    </h6>
    <div class="footer-text">
        <p>
            <strong><?php echo esc_html__('Email', 'astro'); ?>: </strong>
            <a href="mailto: <?php echo $email ?>"><?php echo $email ?></a>
        </p>
        <p>
            <strong><?php echo esc_html__('Customer service', 'astro'); ?>: </strong>
            <a href="tel:<?php echo $tel_1 ?>"><?php echo $tel_1 ?></a>
        </p>
        <p>
            <strong><?php echo esc_html__('Technical problems', 'astro'); ?>: </strong>
            <a href="tel:<?php echo $tel_2 ?>"><?php echo $tel_2 ?></a>
        </p>
    </div>
</div>

<div class="col-lg-6">
    <h6 class="footer-header">
        <?php echo esc_html__('Services', 'astro') ?>
    </h6>
    <div class="row">

        <div class="col-lg-4 col-12">
            <?php if ( ! empty($footer_menus) && is_array($footer_menus)) { ?>

            <ul class="p-0 m-0">
                <?php
                $counter = 0;
                foreach ($footer_menus

                as $menu_item) {
                if ($counter >= 3 && $counter % 3 === 0) {
                ?>
            </ul>
        </div>
        <div class="col-lg-4 col-12">
            <ul class="p-0 m-0">
                <?php
                }

                $counter++;
                ?>
                <li class="footer-item mb-3">
                    <a href="<?php echo $menu_item->url; ?>">
                        <?php echo $menu_item->title; ?>
                    </a>
                </li>
                <?php
                } ?>
            </ul>

            <?php } ?>
        </div>
    </div>
</div>

<div class="col-lg-3 d-flex align-items-center align-items-md-end flex-column">
    <?php
    $footer_logo_2 = get_field('footer_logo_2', $menu);

    if ( ! empty($footer_logo_2)) {
        ?>
        <img src="<?php echo esc_url($footer_logo_2['url']); ?>"
             alt="<?php echo esc_attr($footer_logo_2['alt']); ?>"
             width="130"
             class="mt-auto footer-img">
        <?php
    }
    ?>
</div>
