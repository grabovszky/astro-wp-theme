<?php
/**
 * Header Navigation template
 *
 * Astro theme uses custom WordPress menus for a custom and customizable navbar.
 *
 * @package Astro
 */

use Astro\Inc\Menus;

$menu_class     = Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('header-menu');
$header_menu    = wp_get_nav_menu_object($header_menu_id);
$header_items   = wp_get_nav_menu_items($header_menu_id);
?>

<nav class="navbar navbar-expand-lg my-1">
    <div class="container-xxl g-0">
        <?php get_template_part('template-parts/header/navbar/_brand', null, ['header_menu' => $header_menu]); ?>
        <?php get_template_part('template-parts/header/navbar/_collapse'); ?>
        <?php get_template_part('template-parts/header/navbar/_items', null, ['header_items' => $header_items]); ?>
    </div>
</nav>
