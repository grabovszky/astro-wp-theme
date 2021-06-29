<?php
/**
 * Category cards template, displays every category with latest posts under it
 * in a card format
 */

?>

<div class="row row-cols-1 row-cols-md-2 g-4 mt-2">

    <?php
    $args = [
        'orderby' => 'name',
        'order'   => 'ASC',
        'parent'  => 0,
    ];

    $categories = get_categories($args);

    foreach ($categories as $category) {
        ?>
        <div class="col">
            <div class="card content-container">
                <div class="card-header category-card-header p-4">
                    <div class="d-flex flex-row justify-content-start">
                        <div class="d-flex flex-column justify-content-center me-3">
                            <img src="<?php echo IMG_URI . '/icons/domain-icon-2.svg' ?>"
                                 alt="author profile" width="70px" height="70px">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h4 class="text-h3 text-bold text-blue"><?php echo $category->name; ?></h4>
                            <span class="text-regular text-medium text-blue-subtle"><?php echo $category->category_count . esc_html__(
                                        ' posts in this category',
                                        'astro'
                                    ); ?></span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-4">
                    <ul class="category-card-list ps-2 m-0">
                        <?php
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
                            'cat'            => $category->term_id,
                            'posts_per_page' => 5,
                        ];

                        $query = new WP_Query($query_args);

                        while ($query->have_posts()) {
                            $query->the_post();
                            $link  = get_permalink();
                            $title = get_the_title();

                            ?>
                            <li><a href="<?php echo $link ?>"><?php echo $title ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                    <a href="<?php echo get_category_link($category) ?>"
                       class="btn btn-primary m-4 button-purple"><?php echo esc_html__(
                            'Show more',
                            'astro'
                        ); ?></a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
