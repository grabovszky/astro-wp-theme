<?php
/**
 * Template for the category page
 *
 * @package Astro
 */

$taxonomy = $wp_query->get_queried_object();
$basics   = false;

global $basics_query;
global $all_query;
$paged        = (get_query_var('paged')) ?: 1;
$basics_query = new WP_Query(
    [
        'post_type'      => ['post'],
        'posts_per_page' => get_option('posts_per_page'),
        'paged'          => $paged,
        'post_status'    => 'publish',
        'orderby'        => 'DESC',
        'tax_query'      => [
            'relation' => 'AND',
            [
                'taxonomy' => $taxonomy->taxonomy,
                'field'    => 'term_id',
                'terms'    => [$taxonomy->term_id],
            ],
            [
                'taxonomy' => $taxonomy->taxonomy,
                'field'    => 'slug',
                'terms'    => ['alapok'],
            ],
        ],
    ]
);
$all_query    = new WP_Query(
    [
        'post_type'      => ['post'],
        'posts_per_page' => get_option('posts_per_page'),
        'paged'          => $paged,
        'post_status'    => 'publish',
        'orderby'        => 'DESC',
        'tax_query'      => [
            [
                'taxonomy' => $taxonomy->taxonomy,
                'field'    => 'term_id',
                'terms'    => [$taxonomy->term_id],
            ],
        ],
    ]
);
?>

<div class="card content-container mb-4">
    <div class="card-header category-card-header pb-4">
        <div class="pt-4 px-4">
            <form method="post">
                <button type="submit"
                        name="tag_list_button"
                        value="true"
                        class="me-4 button button-category <?php if ($basics) {
                            echo 'button-category-active';
                        } ?>">
                    <?php echo get_the_archive_title() . ' ' . esc_html__(
                            'basics',
                            'astro'
                        ) . ' (' . $basics_query->post_count . ')'; ?>
                </button>
                <button type="submit"
                        name="tag_list_button"
                        value="false"
                        class="button button-category <?php if ( ! $basics) {
                            echo 'button-category-active';
                        } ?>">
                    <?php echo esc_html__('All posts', 'astro') . ' (' . $taxonomy->count . ')'; ?>
                </button>
            </form>
        </div>
        <div class="d-flex flex-row justify-content-start p-4">
            <div class="d-flex flex-column justify-content-center">
                <h1 class="page-title text-h3 text-bold text-blue my-3">
                    <?php
                    echo get_the_archive_title();

                    if ($basics) {
                        echo ' ' . esc_html__('basics', 'astro');
                    } else {
                        echo ' - ' . esc_html__('all posts', 'astro');
                    }

                    ?>
                </h1>

                <?php the_archive_description(
                    '<div class="taxonomy-description text-blue text-regular">',
                    '</div>'
                ); ?>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <ul class="list-group p-3">
            <?php

            $query = $basics ? $basics_query : $all_query;

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    get_template_part('template-parts/categories/_category-excerpt');
                }

                astro_taxonomy_pagination();
            }

            wp_reset_postdata();
            ?>
        </ul>


    </div>
</div>
