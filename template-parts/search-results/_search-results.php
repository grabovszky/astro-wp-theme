<?php
/**
 * Template for the category page
 *
 * @package Astro
 */

?>


<div class="card content-container mb-4">
    <div class="card-header category-card-header pb-4">
        <div class="d-flex flex-row justify-content-start p-4">
            <div class="d-flex flex-column justify-content-center">
                <h1 class="page-title text-h3 text-bold text-blue my-3">
                    <?php
                    echo $wp_query->found_posts . ' ' . esc_html__('results for: ', 'astro');
                    echo '"';
                    the_search_query();
                    echo '"';
                    ?>
                </h1>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <ul class="list-group p-3">
            <?php
            if (have_posts()) {
                while (have_posts()): the_post();
                    get_template_part('template-parts/categories/_category-excerpt');
                endwhile;

                astro_taxonomy_pagination();
            }
            ?>
        </ul>

    </div>
</div>
