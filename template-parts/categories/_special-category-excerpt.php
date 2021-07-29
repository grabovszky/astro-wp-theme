<?php
/**
 * The excerpt template, to show a post in an excerpt form
 *
 * @package Astro
 */

?>

<li class="list-group-item category-list-item special-category-list-item pb-4">
    <hr class="mb-4">
    <a href="<?php the_permalink(); ?>'" class="text-decoration-none">
        <div class="row">
            <div class="d-none d-sm-block col img-container my-auto">
                <img src="<?php the_post_thumbnail_url(); ?>"
                     alt="img alt" class="img-fluid special-category-page-image">
            </div>
            <div class="col">
                <div class="d-none d-sm-flex justify-content-end">
                    <?php astro_get_the_tags(); ?>
                </div>
                <div class="d-flex d-sm-none justify-content-start">
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
</li>


