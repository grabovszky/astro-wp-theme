<?php
/**
 * Template for the category page
 *
 * @package Astro
 */

?>


<div class="card content-container mb-4">
    <div class="card-header category-card-header pb-4">
        <div class="d-flex flex-row justify-content-start px-4 py-3">
            <div class="d-flex flex-column justify-content-center">
                <h1 class="page-title text-h3 text-bold text-blue my-3"><?php echo esc_html__(
                        'Expert posts',
                        'astro'
                    ); ?></h1>
            </div>
        </div>
    </div>
    <div class="card-body px-4 pt-1">
        <ul class="list-group">
            <?php
            while (have_posts()): the_post();
                get_template_part('template-parts/categories/_special-category-excerpt');
            endwhile;
            ?>
        </ul>
        <?php astro_taxonomy_pagination(); ?>
    </div>
</div>
