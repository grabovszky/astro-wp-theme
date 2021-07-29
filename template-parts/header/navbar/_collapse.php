<?php
/**
 * Header navbar small screen hamburger menu button template
 *
 * @package Astro
 */

?>

<button class="navbar-toggler pe-4"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#main-menu"
        aria-controls="main-menu"
        aria-expanded="false"
        aria-label="<?php echo esc_attr__('Toggle navigation', 'astro'); ?>">
    <label class="navbar-hamburger-icon" for="check">
        <input type="checkbox" id="check"/>
        <span></span>
        <span></span>
        <span></span>
    </label>
</button>
