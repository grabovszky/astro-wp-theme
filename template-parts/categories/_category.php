<?php
/**
 * Template for the category page
 */

?>


<div class="card content-container mb-4">
    <div class="card-header category-card-header pb-4">
        <div class="pt-4 px-4">
            <button class="me-4 button button-category button-category-active">Domain alapok (19)</button>
            <button class="button button-category">További cikkek (33)</button>
        </div>
        <div class="d-flex flex-row justify-content-start p-4">
            <div class="d-flex flex-column justify-content-center">
                <?php the_archive_title(
                    '<h1 class="page-title text-h3 text-bold text-blue my-3">',
                    '</h1>'
                ); ?>

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
            while (have_posts()): the_post();
                get_template_part('template-parts/categories/_category-excerpt');
            endwhile;
            ?>
        </ul>
        <?php astro_taxonomy_pagination(); ?>
    </div>
</div>
