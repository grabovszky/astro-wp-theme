<?php

/**
 * Single post content template
 *
 * @package Astro
 */
$tags       = get_the_tags();
$is_primary = false;

foreach ($tags as $tag) {
    $primary_tag = get_field('primary_tag', $tag->taxonomy . '_' . $tag->term_id);
    if ($primary_tag) {
        $is_primary = true;
        break;
    }
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if (in_array(get_term_by('slug', 'szakertoi_cikk', 'post_tag'), $tags, false)) {
        ?>
        <div class="content-container post-container mb-4 special-post-container">
            <?php
            get_template_part('template-parts/post/_post-nav');
            get_template_part('template-parts/post/special-post/_special-post-header');
            get_template_part('template-parts/post/_post-content');
            ?>
            <div class="px-2">
                <?php get_template_part('template-parts/post/_post-comments'); ?>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="content-container post-container mb-4">
            <?php
            get_template_part('template-parts/post/_post-nav');
            get_template_part('template-parts/post/_post-header');
            get_template_part('template-parts/post/_post-content');
            if ($is_primary && (get_field('cta_switch') === null || get_field('cta_switch'))) {
                get_template_part(
                    'template-parts/post/_post-cta',
                    null,
                    ['category' => get_the_category($wp_query->post->ID)[0]]
                );
            }
            get_template_part('template-parts/post/_post-comments');
            ?>
        </div>
        <?php
    }
    get_template_part('template-parts/post/_post-footer');
    ?>
</article>
