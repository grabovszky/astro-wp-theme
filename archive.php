<?php
/**
 * Template file to display a specific category or tag
 *
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#archive-php
 *
 * @package Astro
 */

$taxonomy    = $wp_query->get_queried_object();
$primary_tag = (get_field('primary_tag', $taxonomy->taxonomy . '_' . $taxonomy->term_id) &&
                ! get_field('header_tag', $taxonomy->taxonomy . '_' . $taxonomy->term_id));

get_header();
?>

    <div class="container-fluid astro-bg-light pb-5" id="primary">
        <div class="container-xxl d-flex py-4">

            <?php get_sidebar(); ?>

            <main id="main" class="site-main" role="main">
                <div class="col ms-3 my-3 category-container">
                    <?php

                    if (get_queried_object_id() === get_term_by('slug', 'szakertoi_cikk', 'post_tag')->term_id) {
                        get_template_part('template-parts/categories/_special-category-page');
                    } else {
                        if ($primary_tag) {
                            get_template_part('template-parts/categories/_primary-category');
                        } else {
                            get_template_part('template-parts/categories/_category');
                        }

                        get_template_part('template-parts/categories/_special-category');
                    }

                    ?>
                </div>
            </main>

        </div>
    </div>

<?php
get_footer();
