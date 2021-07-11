<?php
/**
 * The excerpt template, to show a post in an excerpt form
 *
 * @package Astro
 */

?>

<li onclick="location.href='<?php the_permalink(); ?>'"
    class="list-group-item category-list-item special-category-list-item pb-4">
    <hr class="mb-4">
    <div class="row">
        <div class="col img-container my-auto">
            <img src="<?php the_post_thumbnail_url(); ?>"
                 alt="img alt" class="img-fluid">
        </div>
        <div class="col">
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
</li>


