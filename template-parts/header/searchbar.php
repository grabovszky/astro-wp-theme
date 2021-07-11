<?php
/**
 * Header searchbar template
 *
 * @package Astro
 */

?>

<div class="container-fluid <?php echo (is_front_page()) ? 'searchbar-bg' : 'searchbar-bg-small' ?>">
    <div class="container-xxl h-100 d-flex flex-column justify-content-center align-items-center py-5 searchbar-container">
        <?php if (is_front_page()) {
            get_template_part('template-parts/header/searchbar/_search-header');
            ?> <img src="<?php echo IMG_URI . '/illustration/astronaut-floating.svg'; ?>" alt=""
                    class="searchbar-illustration"> <?php
        } ?>
        <?php get_search_form(); ?>
    </div>
</div>
