<?php
/**
 * Newsletter signup form template
 *
 * @package Astro
 */

?>

<div class="col-lg-6 my-auto">
    <form class="d-flex form-input-box" id="signup">
        <input class="form-control"
               type="email"
               placeholder="my@email.com"
               aria-label="<?php echo esc_attr__('Email', 'astro'); ?>">
        <button type="submit"><?php echo esc_html__('Sign Up', 'astro'); ?></button>
    </form>
</div>
