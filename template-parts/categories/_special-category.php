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

<div class="d-none d-md-block px-5 py-4 content-container mb-4">
    <div class="row">
        <div class="col d-flex align-items-center">
            <h3 class="text-h2 text-blue"><?php echo esc_html__('Our Expert posts', 'astro'); ?></h3>
            <a href="<?php echo get_tag_link($expert_post_tag->term_id); ?>"
               class="btn btn-primary ms-auto button button-secondary">
                <?php echo esc_html__(
                    'Show more',
                    'astro'
                ); ?></a>

        </div>
        <hr class="mt-3 horizontal-divider">
    </div>
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel"
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
            <div class="carousel-indicators carousel-indicator mt-4">

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

<?php
$query   = new WP_Query($query_args);
$counter = 0;
?>
<div class="d-md-none p-3 mt-3">
    <div class="row">
        <div class="col d-flex align-items-center">
            <h3 class="text-h2 text-blue"><?php echo esc_html__('Our Expert posts', 'astro'); ?></h3>
        </div>
    </div>
    <div class="row p-3">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="50000">
            <div class="carousel-inner mobile-carousel">
                <?php

                while ($query->have_posts()) {
                    $query->the_post();
                    get_template_part(
                        'template-parts/categories/special-category/_mobile-card',
                        null,
                        ['counter' => $counter]
                    );
                    $counter++;
                }

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row justify-content-center align-items-center mb-4">

        <button class="carousel-control-prev mobile-controls" type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon control-icon" aria-hidden="true"></span>
            <span class="visually-hidden"><?php echo esc_html__('Previous', 'astro'); ?></span>
        </button>
        <a href="<?php echo get_tag_link($expert_post_tag->term_id); ?>"
           class="mx-3 button button-secondary mobile-carousel-button">
            <?php echo esc_html__(
                'Show all post',
                'astro'
            ); ?>
        </a>
        <button class="carousel-control-next mobile-controls" type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
            <span class="carousel-control-next-icon control-icon" aria-hidden="true"></span>
            <span class="visually-hidden"><?php echo esc_html__('Next', 'astro'); ?></span>
        </button>

    </div>
</div>
