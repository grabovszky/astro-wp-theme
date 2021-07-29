<?php
/**
 * Wordpress search form field template
 *
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package Astro
 */

?>

<form role="search"
      method="get"
      action="<?php echo esc_url(home_url('/')); ?>"
      id="searchform"
      class="searchform d-flex col-lg-6 col-md-8 col-sm-11 col-12 form-input-box">

    <input type="hidden" name="post_type" value="post"/>

    <input class="form-control"
           type="text"
           name="s"
           id="s"
           placeholder="<?php echo esc_attr__('What are you looking for?', 'astro') ?>"
           value="<?php the_search_query(); ?>"
           aria-label="<?php echo esc_attr__('Search', 'astro') ?>"
           required>

    <button type="submit" class="d-none d-md-block"><?php echo esc_html__('Search', 'astro'); ?></button>
    <button type="submit" class="d-md-none mobile-round-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
             viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
    </button>
</form>
