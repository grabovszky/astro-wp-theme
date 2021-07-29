<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Astro
 */

get_header();
?>

    <div class="container-fluid astro-bg-light pb-5" id="primary">
        <div class="container-xxl d-flex py-4">

            <main id="main" class="site-main" role="main">
                <div class="col my-3 p-5">
                    <h1 class="mt-5 text-center text-blue text-error">404</h1>
                    <h3 class="text-center text-blue"><?php echo esc_html__(
                            'Error: The page you were looking for was not found.',
                            'astro'
                        ); ?>
                    </h3>
                    <img src="<?php echo IMG_URI . '/illustration/404.svg' ?>" alt=""
                         class="p-4 img-fluid img-error">
                    <a href="javascript:history.back()" class="ms-auto button button-secondary">
                        <?php echo esc_html__('Go back', 'astro') ?>
                    </a>
                </div>
            </main>

        </div>
    </div>

<?php
get_footer();
