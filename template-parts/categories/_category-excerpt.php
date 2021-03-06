<?php
/**
 * The excerpt template, to show a post in an excerpt form
 *
 * @package Astro
 */

?>

<li class="list-group-item category-list-item mt-4 p-0 pb-4" aria-current="true">
    <div class="d-flex w-100 justify-content-between mb-3">
        <a href="<?php echo get_permalink(get_the_ID()); ?>"
           class="text-decoration-none text-blue text-h4 text-bold mb-1"><?php the_title(); ?></a>
        <div class="d-flex d-flex justify-content-end align-items-start">
            <?php astro_get_the_tags(); ?>
        </div>
    </div>
    <div class="entry text-blue text-regular mb-1">
        <?php astro_the_excerpt(300); ?>
    </div>
    <div>
        <?php echo astro_excerpt_more(); ?>
    </div>
</li>
