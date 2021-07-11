<?php /* Template Name: PageServices */ ?>
<?php

use Astro\Inc\Menus;

$menu_class     = Menus::get_instance();
$footer_menu_id = $menu_class->get_menu_id('footer-menu');
$footer_menus   = wp_get_nav_menu_items($footer_menu_id);

get_template_part('header-no-searchbar');
?>

    <div class="container-fluid astro-bg-light" id="primary">
        <div class="container-xxl d-flex py-4 services-container">
            <main id="main" class="site-main mb-5" role="main">
                <h1 class="text-center text-h1 text-blue my-5"><?php the_title(); ?></h1>
                <div class="mx-5 mb-5 px-5 text-blue">
                    <?php the_content(); ?>
                </div>
                <div class="my-5 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 justify-content-center">
                    <?php
                    if ( ! empty($footer_menus) && is_array($footer_menus)) {
                        foreach ($footer_menus as $menu_item) {
                            get_template_part(
                                'template-parts/services/_service-card',
                                null,
                                ['menu_item' => $menu_item]
                            );
                        }
                    }
                    ?>
                </div>
                <p class="text-blue"><span class="text-red">*</span> <?php echo esc_html__(
                        'Prices don\'t contain VAT!',
                        'astro'
                    ); ?></p>
            </main>
        </div>
    </div>

<?php
get_footer();
