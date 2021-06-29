<?php
/**
 * Theme html footer template part
 *
 * Astro theme uses custom WordPress menus for a custom and customizable footer.
 *
 * @package Astro
 */

?>


<footer>
    <div class="container-fluid astro-footer">
        <div class="container-xxl">
            <div class="row py-5">
                <?php get_template_part('template-parts/footer/foot/_logo'); ?>
            </div>
            <div class="row">
                <?php get_template_part('template-parts/footer/foot/_divider'); ?>
            </div>
            <div class="row my-5">
                <?php get_template_part('template-parts/footer/foot/_menu'); ?>
            </div>
            <div class="row pb-2">
                <?php get_template_part('template-parts/footer/foot/_copyright'); ?>
            </div>
        </div>
    </div>
</footer>

