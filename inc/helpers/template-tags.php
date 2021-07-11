<?php
/**
 * Template tags to use with the theme to display information dynamically.
 *
 * @link https://codex.wordpress.org/Template_Tags
 *
 * @package Astro
 */

/**
 * Modifies the base excerpt function of WordPress by trimming a specific
 * character count
 */
function astro_the_excerpt($trim_character_count = 300)
{
    if ($trim_character_count === 0 || has_excerpt()) {
        the_excerpt();

        return;
    }

    $excerpt = wp_html_excerpt(get_the_excerpt(), $trim_character_count, '...');

    echo $excerpt;
}

/**
 * Places an a tag after the excerpt which links to the post page
 */
function astro_excerpt_more(): string
{
    return sprintf(
        '<a class="read-on" href="%1$s">%2$s</a>',
        get_permalink(get_the_ID()),
        __('Read more', 'astro')
    );
}

/**
 * This function provides pagination in the category page when listing posts
 */
function astro_taxonomy_pagination()
{
    $allowed_tags = [
        'span' => [
            'class' => [],
        ],
        'a'    => [
            'class' => [],
            'href'  => [],
        ],
    ];

    $args = [
        'prev_next'          => false,
        'before_page_number' => '<span class="btn pagination-item">',
        'after_page_number'  => '</span>',
    ];

    printf(
        '<nav class="pagination justify-content-center my-4 pt-4">%s</nav>',
        wp_kses(paginate_links($args), $allowed_tags)
    );
}

/**
 * This function returns the tags associated with a post in a badge pill format
 */
function astro_get_the_tags()
{
    $tags = get_the_tags();

    if ($tags) {
        foreach ($tags as $tag) {
            if ($tag->term_id === get_term_by('slug', 'szakertoi_cikk', 'post_tag')->term_id) {
                continue;
            }

            $category_tag = get_field('category_tag', $tag->taxonomy . '_' . $tag->term_id);

            display_tag($tag, ! $category_tag);
        }
    }
}

function display_tag($tag, $primary)
{
    $classes = 'class="badge rounded-pill button-tag button-tag-' . ($primary ? 'primary"' : 'secondary"');
    $link    = 'onclick="location.href=\'' . get_tag_link($tag->term_id) . '\'"';
    $name    = $tag->name;

    echo '<span ' . $classes . ' ' . $link . '>' . $name . '</span>';
}

/**
 * Add this filter to remove taxonomy type string from the get_the_archive_title
 * WordPress function
 */
add_filter(
    'get_the_archive_title',
    function ($title) {
        if (is_category()) {
            $title = single_cat_title('', false);
        } elseif (is_tag()) {
            $title = single_tag_title('', false);
        } elseif (is_author()) {
            $title = '<span class="vcard">' . get_the_author() . '</span>';
        } elseif (is_tax()) { //for custom post types
            $title = sprintf(__('%1$s', 'astro'), single_term_title('', false));
        } elseif (is_post_type_archive()) {
            $title = post_type_archive_title('', false);
        }

        return $title;
    }
);
