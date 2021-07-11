<?php
/**
 * Newsletter call to action template
 *
 * @package Astro
 */

?>

<div class="col-md-3 my-auto">
    <h2 class="text-h1 text-blue"><?php echo get_bloginfo('name') . esc_html__(' newsletter', 'astro'); ?></h2>
    <p class="text-bigger text-medium text-blue-light"><?php echo esc_html__(
            'Sign up and we\'ll notify you about our latest articles.',
            'astro'
        ); ?></p>
</div>
