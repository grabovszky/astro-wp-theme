<?php
/**
 * Template for displaying back button on post
 *
 * @package Astro
 */

?>

<div class="post-back">
    <a href="javascript:history.back()" class="link">
        <?php echo '&laquo; ' . esc_html__('Back', 'astro') ?>
    </a>
</div>
