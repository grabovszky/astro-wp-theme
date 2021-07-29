<?php

?>
<div class="d-lg-none mobile-nav mt-3 pt-4 astro-bg-light">
    <ul class="navbar-nav ms-auto text-center mobile-items">
        <?php
        $tags = get_tags();

        $cat_1_tag = [];
        $cat_2_tag = [];
        $cat_3_tag = [];

        if ($tags) {
            foreach ($tags as $tag) {
                $category_tag = get_field('category_tag', $tag->taxonomy . '_' . $tag->term_id);
                $primary_tag  = get_field('primary_tag', $tag->taxonomy . '_' . $tag->term_id);
                $header_tag   = get_field('header_tag', $tag->taxonomy . '_' . $tag->term_id);

                if ($header_tag) {
                    $cat_1_tag[] = $tag;
                } elseif ($primary_tag) {
                    $cat_2_tag[] = $tag;
                } elseif ($category_tag) {
                    $cat_3_tag[] = $tag;
                }
            }
        }

        foreach ($cat_1_tag as $tag) {
            ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_tag_link($tag); ?>">
                    <?php echo $tag->name; ?>
                </a>
            </li>

            <?php
        }

        ?>
        <hr>
        <?php

        foreach ($cat_2_tag as $tag) {
            ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_tag_link($tag); ?>">
                    <?php echo $tag->name; ?>
                </a>
            </li>

            <?php
        }

        ?>
        <hr>
        <?php

        foreach ($cat_3_tag as $tag) {
            ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_tag_link($tag); ?>">
                    <?php echo $tag->name; ?>
                </a>
            </li>

            <?php
        }

        ?>
    </ul>
    <div class="d-flex flex-column align-items-center p-4">
        <a href="<?php echo esc_html__('https://www.rackhost.hu', 'astro'); ?>" class="mx-5 mb-4 button button-purple">Rackhost.hu</a>
        <a href="<?php echo get_permalink(get_page_by_path('rackhost-hu-szolgalatasai')); ?>"
           class="mx-5 mb-4 button button-purple">Szolgáltatásaink</a>
    </div>
</div>
