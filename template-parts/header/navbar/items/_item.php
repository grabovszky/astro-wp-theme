<?php
/**
 * Header navbar single link item template
 *
 * @package Astro
 */

?>

<li class="nav-item">
    <a class="nav-link " href="<?php echo esc_url($args['menu_item']->url); ?>">
        <span class="astro-nav-text astro-nav-hover"><?php echo esc_html(
                $args['menu_item']->title
            ); ?>
        </span>
    </a>
</li>
