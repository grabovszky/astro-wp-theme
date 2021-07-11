<?php
/**
 * Theme signup to newsletter template part
 *
 * @package Astro
 */

?>

<div class="container-fluid background-light slanted-bg">
    <div class="container-xxl h-100 py-5 newsletter-container">
        <div class="row justify-content-center mb-4 pe-5">
            <?php get_template_part('template-parts/footer/newsletter/_cta'); ?>
            <?php get_template_part('template-parts/footer/newsletter/_signup-form'); ?>
        </div>
        <?php get_template_part('template-parts/footer/newsletter/_illustration'); ?>
    </div>
</div>
