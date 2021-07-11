<?php
/**
 * Header navbar link items container template
 *
 * @package Astro
 */

?>

<div class="collapse navbar-collapse" id="main-menu">

    <?php
    if ( ! empty($args['header_items']) && is_array($args['header_items'])) {
        ?>
        <ul class="navbar-nav ms-auto">
            <?php foreach ($args['header_items'] as $menu_item) {
                get_template_part('template-parts/header/navbar/items/_item', null, ['menu_item' => $menu_item]);

                if ($menu_item !== end($args['header_items'])) {
                    get_template_part('template-parts/header/navbar/items/_separator');
                }
            } ?>
        </ul>
        <?php
    }
    ?>
</div>
