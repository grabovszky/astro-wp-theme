<?php
/**
 * Special category carousel item template
 *
 * @package Astro
 */

?>

<div class="carousel-item <?php echo $args['counter'] === 0 ? 'active' : ''; ?>">
    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
        <div class="row mt-4 py-4">
            <div class="col-6 img-container">
                <img src="<?php the_post_thumbnail_url(); ?>"
                     alt="" class="height-cropped">
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end">
                    <?php astro_get_the_tags(); ?>
                </div>
                <div class="my-4">
                    <h2 class="text-h1 text-blue"><?php echo get_the_title(); ?></h2>
                    <p class="text-regular text-blue"><?php echo get_the_excerpt(); ?></p>
                </div>
                <div>
                    <?php get_template_part('template-parts/components/_author'); ?>
                </div>
            </div>
        </div>
    </a>
</div>

