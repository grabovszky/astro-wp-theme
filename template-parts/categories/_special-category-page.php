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
                <?php the_archive_title(
                    '<h1 class="page-title text-h3 text-bold text-blue my-3">',
                    '</h1>'
                ); ?>
            </div>
        </div>
        <div class="px-4 special-category-tags">
            <button class="button button-category button-category-active" title="Function not implemented yet!">
                <?php echo esc_html__('All posts', 'astro') . ' (' . $wp_query->post_count . ')'; ?>
            </button>
            <button class="button button-category" title="Function not implemented yet!">SEO (5)</button>
            <button class="button button-category" title="Function not implemented yet!">Design (2)</button>
            <button class="button button-category" title="Function not implemented yet!">Szerver (8)</button>
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
