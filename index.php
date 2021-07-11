<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Astro
 */

get_header();
?>

    <div class="container-fluid astro-bg-light pb-5" id="primary">
        <div class="container-xxl d-flex py-4">
            <?php get_sidebar(); ?>
            <main id="main" class="site-main" role="main">
                <div class="col ms-3 my-3">
                    <?php get_template_part('template-parts/categories/_special-category'); ?>
                    <?php get_template_part('template-parts/categories/_category-cards'); ?>
                </div>
            </main>
        </div>
    </div>

<?php
get_footer();
