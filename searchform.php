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

    <input class="form-control"
           type="text"
           name="s"
           id="s"
           placeholder="<?php echo esc_attr__('What are you looking for?', 'astro') ?>"
           value="<?php the_search_query(); ?>"
           aria-label="<?php echo esc_attr__('Search', 'astro') ?>">
    <button type="submit"><?php echo esc_html__('Search', 'astro'); ?></button>
</form>
