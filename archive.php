<?php
/**
 * Template file to display a specific category or tag
 *
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#archive-php
 *
 * @package Astro
 */

get_header();
?>

    <div class="container-fluid astro-bg-light" id="primary">
        <div class="container-xxl d-flex py-4">
            <?php get_sidebar(); ?>
            <main id="main" class="site-main" role="main">
                <div class="col ms-3 my-3">
                    <?php get_template_part('template-parts/categories/_category'); ?>
                </div>
            </main>
        </div>
    </div>

<?php
get_footer();
