<?php
/**
 * Special category card carousel template
 *
 * @package Astro
 */

$expert_post_tag = get_term_by('slug', 'szakertoi_cikk', 'post_tag');

$query_args = [
    'tax_query'      => [
        [
            'taxonomy' => $expert_post_tag->taxonomy,
            'filed'    => 'term_id',
            'terms'    => $expert_post_tag->term_id,
        ],
    ],
    'posts_per_page' => 4,
];

$query   = new WP_Query($query_args);
$counter = 0;
?>

<div class="p-4 content-container mb-4">
    <div class="row mx-2 mt-2">
        <div class="col d-flex align-items-center">
            <h3 class="text-h2 text-blue"><?php echo esc_html__('Our Expert posts', 'astro'); ?></h3>
            <button class="btn btn-primary ms-auto button button-secondary"
                    onclick="location.href='<?php echo get_tag_link($expert_post_tag->term_id); ?>'">
                <?php echo esc_html__(
                    'Show more',
                    'astro'
                ); ?></button>

        </div>
        <hr class="mt-3 horizontal-divider">
    </div>
    <div class="row mx-2">
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel"
             data-bs-interval="50000">

            <div class="carousel-inner">
                <?php

                while ($query->have_posts()) {
                    $query->the_post();
                    get_template_part(
                        'template-parts/categories/_special-category-item',
                        null,
                        ['counter' => $counter]
                    );
                    $counter++;
                }

                wp_reset_postdata();
                ?>
            </div>
            <div class="carousel-indicators carousel-indicator">

                <?php

                for ($i = 0; $i < $counter; $i++) {
                    ?>

                    <button type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="<?php echo $i ?>"
                            aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                            aria-label="Slide <?php echo $i + 1; ?>"
                            class="<?php echo $i === 0 ? 'active' : ''; ?>">
                    </button>

                    <?php
                }

                ?>
            </div>
        </div>
    </div>
</div>
