<?php
/**
 * Template for displaying post title and tags
 *
 * @package Astro
 */

$feature_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

<header class="entry-header d-flex align-items-end py-2 mb-5 special-post-header" style="
        background-image: linear-gradient(180deg, hsla(0, 0%, 100%, 0) 0%, hsla(265, 50%, 31%, 0.5) 60%, hsla(265, 50%, 31%, 1)), url(<?php echo $feature_img_url; ?>);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        ">
    <div class="d-flex w-100 justify-content-between mb-3 special-post-header-content">
        <div class="col">
            <h1 class="text-h1 text-white mb-2"><?php echo get_the_title(); ?></h1>
            <?php astro_get_the_tags(); ?>
        </div>
        <div class="col-4 d-flex special-post-author mt-auto justify-content-end">
            <?php get_template_part('template-parts/components/_author'); ?>
        </div>
    </div>
</header>

