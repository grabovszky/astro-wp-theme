<?php
/**
 * Template for displaying the search results
 *
 * @link https://wordpress.org/support/article/creating-a-search-page/
 *
 * @package Astro
 */

get_header();
global $wp_query;
?>

    <div class="astro-bg-light pb-5" id="primary">
        <div class="container-xxl d-flex py-4">

            <?php get_sidebar(); ?>

            <main id="main" class="site-main" role="main">
                <div class="col ms-3 mt-3">
                    <?php get_template_part('template-parts/search-results/_search-results'); ?>
                </div>
            </main>

        </div>
    </div>

<?php
get_footer();
