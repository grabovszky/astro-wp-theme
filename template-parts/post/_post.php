<?php

/**
 * Single post content template
 *
 * @package Astro
 */
$tags = get_the_tags();
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
            get_template_part('template-parts/post/_post-comments');
            ?>
        </div>
        <?php
    } else {
        ?>
        <div class="content-container post-container mb-4">
            <?php
            get_template_part('template-parts/post/_post-nav');
            get_template_part('template-parts/post/_post-header');
            get_template_part('template-parts/post/_post-content');
            get_template_part('template-parts/post/_post-cta');
            get_template_part('template-parts/post/_post-comments');
            ?>
        </div>
        <?php
    }
    get_template_part('template-parts/post/_post-footer');
    ?>
</article>
