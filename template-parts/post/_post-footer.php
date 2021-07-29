<?php
/**
 * Template for displaying related posts
 *
 * @package Astro
 */

?>

<h4 class="text-blue text-bold text-h1 px-4 mt-5">
    <?php echo esc_html__('Related posts', 'astro'); ?>
</h4>

<hr>

<div class="row g-0 p-2">

    <?php
    /**
     * We query the posts associated to the current post by the tags used on the
     * post.
     */
    $original_post = $post;
    $tags          = wp_get_post_tags($post->ID);

    if ($tags) {
    $tag_ids = [];

    foreach ($tags as $tag) {
        $tag_ids[] = $tag->term_id;
    }

    $args = [
        'tag__in'          => $tag_ids,
        'post__not_in'     => [$post->ID],
        'posts_per_page'   => 6,
        'caller_get_posts' => 1,
    ];

    $query   = new wp_query($args);
    $counter = 0;

    ?>
    <div class="col-sm-12 col-md-6">
        <ul class="list">
            <?php

            while ($query->have_posts()) {
            $query->the_post();

            if ($counter === 3) {
            ?>
        </ul>
    </div>
    <div class="col-sm-12 col-md-6">
        <ul class="list">
            <?php
            }

            ?>
            <li>
                <a href="<?php the_permalink(); ?>" rel="nofollow" target="_blank"><?php the_title(); ?></a>
            </li>
            <?php

            $counter++;
            }
            }

            $post = $original_post;
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>
