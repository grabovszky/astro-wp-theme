<?php
/**
 * Category cards template, displays every category with latest posts under it
 * in a card format
 *
 * @package Astro
 */

?>

<div class="row row-cols-1 row-cols-md-2 g-0 g-md-3">

    <?php
    $args = [
        'orderby'    => 'name',
        'order'      => 'ASC',
        'hide_empty' => false, //TODO! only for development, remove in prod
    ];

    $tags = get_tags($args);

    foreach ($tags as $tag) {
        $primary_tag = get_field('primary_tag', $tag->taxonomy . '_' . $tag->term_id);

        if ($primary_tag) {
            $tag_image = get_field('tag_icon', $tag->taxonomy . '_' . $tag->term_id);

            /**
             * Query categories by term_id instead of cat_id or by referencing to category_name by
             * category->name
             *
             * WordPress has a bug while querying categories by name, and WordPress taxonomies are a mess,
             * because WordPress uses terms for categories and tags instead of separate objects.
             *
             * @link https://developer.wordpress.org/themes/basics/categories-tags-custom-taxonomies/
             * @link https://wordpress.stackexchange.com/questions/37721/whats-the-difference-between-term-id-and-term-taxonomy-id
             */
            $query_args = [
                'tax_query'      => [
                    [
                        'taxonomy' => $tag->taxonomy,
                        'filed'    => 'term_id',
                        'terms'    => $tag->term_id,
                    ],
                ],
                'posts_per_page' => 6,
            ];
            ?>

            <div class="col d-none d-md-block mb-4">
                <div class="card h-100 content-container">
                    <div class="card-header category-card-header p-4">
                        <div class="d-flex flex-row justify-content-start">
                            <div class="d-flex flex-column justify-content-center me-3">
                                <img src="<?php echo $tag_image['url'] ?>"
                                     alt="<?php echo $tag_image['alt'] ?>" width="70px" height="70px">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h4 class="text-h3 text-bold text-blue"><?php echo $tag->name; ?></h4>
                                <span class="text-regular text-medium text-blue-subtle"><?php echo $tag->count . esc_html__(
                                            ' posts in this category',
                                            'astro'
                                        ); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-4 pt-4 pb-0">
                        <ul class="category-card-list ps-3 m-0">
                            <?php
                            $query = new WP_Query($query_args);

                            while ($query->have_posts()) {
                                $query->the_post();
                                $link  = get_permalink();
                                $title = get_the_title();

                                ?>
                                <li><a href="<?php echo $link ?>"><?php echo $title ?></a></li>
                                <?php
                            }

                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                    <div class="card-footer ps-3 ms-4 pb-4">
                        <a href="<?php echo get_tag_link($tag); ?>"
                           class="btn btn-primary m-4 button button-secondary"><?php echo esc_html__(
                                'Show more',
                                'astro'
                            ); ?></a>
                    </div>
                </div>
            </div>

            <div class="col d-md-none">
                <div class="content-container ms-3 me-4 mb-4 p-4 pointer">
                    <a href="<?php echo get_tag_link($tag); ?>" class="text-decoration-none">
                        <div class="d-flex flex-row align-items-center justify-content-start">
                            <img src="<?php echo $tag_image['url'] ?>"
                                 alt="<?php echo $tag_image['alt'] ?>" width="70px" height="70px">
                            <div class="ms-3">
                                <h4 class="text-h3 text-bold text-blue"><?php echo $tag->name; ?></h4>
                                <span class="text-regular text-medium text-blue-subtle"><?php echo $tag->count . esc_html__(
                                            ' posts',
                                            'astro'
                                        ); ?></span>
                            </div>
                            <div class="ms-auto me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#9d97c9"
                                     class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <?php
        }
    }
    ?>
</div>
