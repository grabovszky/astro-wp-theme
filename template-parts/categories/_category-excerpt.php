<?php
/**
 * The excerpt template, to show a post in an excerpt form
 */

?>

<li href="#" class="list-group-item category-list-item mt-4 p-0 pb-4" aria-current="true">
    <div class="d-flex w-100 justify-content-between mb-3">
        <h3 class="text-blue text-h4 text-bold  mb-1"><?php the_title(); ?></h3>
        <div>
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
