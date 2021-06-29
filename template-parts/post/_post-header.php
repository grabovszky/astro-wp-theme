<?php
/**
 * Template for displaying post title and tags
 *
 * @package Astro
 */

?>

<header class="entry-header">
    <div class="d-flex w-100 justify-content-between mb-3">
        <?php the_title('<h1 class="text-blue text-h3 text-bold">', '</h1>') ?>
        <div>
            <?php astro_get_the_tags(); ?>
        </div>
    </div>
</header>

