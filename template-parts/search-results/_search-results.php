<?php
/**
 * Template for the search results
 *
 * @package Astro
 */

?>


<div class="card content-container mb-4">
    <div class="card-header category-card-header pb-4">
        <div class="d-flex flex-row justify-content-start p-4">
            <div class="d-flex flex-column justify-content-center">
                <h1 class="page-title text-h3 text-bold text-blue my-3">
                    <?php
                    echo $wp_query->found_posts . ' ' .
                         esc_html__('results for: ', 'astro') . '"' .
                         get_search_query() . '"';
                    ?>
                </h1>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <ul class="list-group p-3">
            <?php
            if (have_posts()) {
                while (have_posts()): the_post();
                    get_template_part('template-parts/categories/_category-excerpt');
                endwhile;

                astro_taxonomy_pagination();
            } else {
                ?>
                <h3 class="mt-5 text-center text-blue"><?php echo esc_html__(
                        'Sorry no posts were found!',
                        'astro'
                    ); ?>
                </h3>
                <p class="text-center text-blue"><?php echo esc_html__(
                        'Here is a cute robot to cheer you up:',
                        'astro'
                    ); ?>
                </p>
                <img src="<?php echo IMG_URI . '/illustration/ugyintezes-drawing.svg' ?>" alt=""
                     class="p-5 img-fluid cute-robot" width="50%">
                <a href="javascript:history.back()" class="ms-auto button button-secondary">
                    <?php echo esc_html__('Go back', 'astro') ?>
                </a>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
