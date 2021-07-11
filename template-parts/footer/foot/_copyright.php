<?php
/**
 * Footer copyright template
 *
 * @package Astro
 */

?>

<div class="col text-center footer-copyright">
    <span id="footer-copyright">
        <?php echo
            '&copy ' .
            date('Y') . ' ' .
            get_bloginfo('name') . ' ' .
            esc_html__('Ltd.', 'astro');
        ?>
    </span>
</div>
