<?php
/**
 * Header searchbar search form template
 *
 * @package Astro
 */

?>

<form id="searchInput" class="d-flex col-lg-6 col-md-8 col-sm-11 col-12 mt-5 search-field">

    <input class="form-control search-input"
           type="search"
           placeholder="<?php echo esc_html__('What are you looking for?', 'astro') ?>"
           aria-label="<?php echo esc_html__('Search', 'astro') ?>">
    <button class="btn btn-primary search-button"
            type="submit"><?php echo esc_html__(
            'Search',
            'astro'
        ) ?>
    </button>

</form>
