<?php
/**
 * Header Navigation template
 *
 * Astro theme uses custom WordPress menus for a custom and customizable navbar.
 *
 * @package Astro
 */

?>

<nav class="navbar navbar-expand-lg navbar-light astro-nav">
    <div class="container-xxl">
        <?php get_template_part('template-parts/header/navbar/_brand'); ?>
        <?php get_template_part('template-parts/header/navbar/_collapse'); ?>
        <?php get_template_part('template-parts/header/navbar/_items'); ?>
    </div>
</nav>
