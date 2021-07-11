<?php
/**
 * Template for displaying content of a post
 *
 * @package Astro
 */

?>

<div class="entry-content margin-bottom-big">
    <?php
    the_content(
        sprintf(
            wp_kses(
                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'astro'),
                [
                    'span' => [
                        'class' => [],
                    ],
                ]
            ),
            wp_kses_post(get_the_title())
        )
    );

    wp_link_pages(
        [
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'astro'),
            'after'  => '</div>',
        ]
    );
    ?>
</div>
