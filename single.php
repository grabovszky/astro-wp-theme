<?php
/**
 * The template for displaying a single post
 *
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#single-php
 *
 * @package Astro
 */

get_header();
?>

    <div id="primary" class="container-fluid astro-bg-light">
        <div class="container-xxl d-flex py-4">
            <?php get_sidebar(); ?>
            <main id="main" class="site-main" role="main">
                <div class="col ms-3 my-3">
                    <?php get_template_part('template-parts/post/_post'); ?>
                </div>
            </main>
        </div>
    </div>

<?php
get_footer();
