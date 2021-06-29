<?php
/**
 * Newsletter signup form template
 *
 * @package Astro
 */

//TODO change to dynamically load data
?>

<div class="col-lg-6 my-auto">
    <form class="d-flex newsletter-field">
        <input class="form-control newsletter-input"
               type="email"
               placeholder=""
               aria-label="<?php echo esc_html__('Email', 'astro') ?>">
        <button class="btn btn-primary newsletter-button"
                type="submit"><?php echo esc_html__(
                'Sign Up',
                'astro'
            ) ?>
        </button>
    </form>
</div>
