<?php

$tags = get_tags(
    [
        'hide_empty' => false, //TODO! only for development, remove in prod
    ]
);

$categories = [];

if ($tags) {
    foreach ($tags as $tag) {
        $category_tag = get_field('category_tag', $tag->taxonomy . '_' . $tag->term_id);
        $primary_tag  = get_field('primary_tag', $tag->taxonomy . '_' . $tag->term_id);
        $header_tag   = get_field('header_tag', $tag->taxonomy . '_' . $tag->term_id);

        if ($category_tag && ! $primary_tag && ! $header_tag) {
            $categories[] = $tag;
        }
    }
}
?>

<div class="p-3">
    <h2 class="text-blue text-center mb-5 text-lined">További témák</h2>
    <ul>
        <?php
        if ($categories) {
            foreach ($categories as $category) {
                ?>
                <li class="content-container p-3 ps-4 ms-2 me-3 mb-3 text-h3 pointer">
                    <a href="<?php echo get_term_link($category->term_id); ?>" class="text-decoration-none">
                        <?php echo $category->name; ?>
                    </a>
                </li>
                <?php
            }
        }
        ?>
    </ul>
</div>
