<?php
/**
 * Header navbar link items container template
 *
 * @package Astro
 */

use Astro\Inc\Menus;

$menu_class     = Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('header-menu');
$header_menus   = wp_get_nav_menu_items($header_menu_id);
?>

<div class="collapse navbar-collapse" id="main-menu">

    <?php if ( ! empty($header_menus) && is_array($header_menus)) { ?>

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <?php foreach ($header_menus as $menu_item) {
                get_template_part('template-parts/header/navbar/items/_item', null, ['menu_item' => $menu_item]);
                if ($menu_item !== end($header_menus)) {
                    get_template_part('template-parts/header/navbar/items/_separator');
                }
            } ?>
        </ul>

    <?php } ?>

</div>
