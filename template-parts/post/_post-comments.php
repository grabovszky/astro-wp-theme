<?php
/**
 * Template for displaying post comments
 *
 * @package Astro
 */

?>

<div class="container mb-4 p-0">
    <?php
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
    ?>
</div>
