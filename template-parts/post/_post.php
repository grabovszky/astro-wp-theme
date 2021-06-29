<?php
/**
 * Single post content template
 *
 * @package Astro
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="content-container post-container mb-4">
        <?php
        get_template_part('template-parts/post/_post-nav');
        get_template_part('template-parts/post/_post-header');
        get_template_part('template-parts/post/_post-content');
        get_template_part('template-parts/post/_post-cta');
        get_template_part('template-parts/post/_post-comments');
        ?>
    </div>

    <?php get_template_part('template-parts/post/_post-footer'); ?>
    
</article>
