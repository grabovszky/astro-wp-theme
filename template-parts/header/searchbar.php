<?php
/**
 * Header searchbar template
 *
 * @package Astro
 */

?>

<div class="container-fluid searchbar-bg">
    <div class="container-xxl h-100 d-flex flex-column justify-content-center align-items-center py-5">
        <?php get_template_part('template-parts/header/searchbar/_search-header'); ?>
        <?php get_template_part('template-parts/header/searchbar/_search-form'); ?>
    </div>
</div>
