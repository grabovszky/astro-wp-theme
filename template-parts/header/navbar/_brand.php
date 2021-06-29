<?php
/**
 * Header navbar brand logo template
 *
 * @package Astro
 */

if (function_exists('the_custom_logo')) {
    ?>

    <div class="navbar-brand astro-nav-brand">
        <?php the_custom_logo(); ?>
    </div>

    <?php
}
